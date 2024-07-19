const words = document.querySelectorAll('.word');
const dropzones = document.querySelectorAll('.dropzone');
const finalizeButton = document.getElementById('finalizeButton');
let inicioTiempo = new Date().getTime();

window.addEventListener('beforeunload', function (event) {
    let endTime = new Date().getTime();
    let timeSpent = (endTime - startTime)

    const Tprueba = {
        test: 3,
        tiempo: timeSpent
    }

    const url = '../db/log-time.php';
    const data = JSON.stringify(Tprueba);

    navigator.sendBeacon(url, data);

    console.log('Datos enviados correctamente a log-time.php');

});

words.forEach(word => {
    word.addEventListener('dragstart', dragStart);
});

dropzones.forEach(dropzone => {
    dropzone.addEventListener('dragover', dragOver);
    dropzone.addEventListener('drop', drop);
});

function dragStart(e) {
    e.dataTransfer.setData('text/plain', e.target.dataset.word);
}

function dragOver(e) {
    e.preventDefault();
}

function drop(e) {
    e.preventDefault();
    const data = e.dataTransfer.getData('text/plain');
    const dropzone = e.target;
    dropzone.textContent = data;
    dropzone.dataset.word = data;

    const currentSection = dropzone.closest('div[id^="ejercicio"]');
    const nextButton = currentSection.querySelector('button');
    if (nextButton) {
        nextButton.disabled = false;
    }
    
    if (dropzone.id === "dropzone10") {
        finalizeButton.disabled = false;
    }
}

function nextSection(sectionId, currentSectionId) {
    const dropzones = document.querySelectorAll(`#${currentSectionId} .dropzone`);

    let canProceed = true;
    dropzones.forEach(dropzone => {
        if (!dropzone.dataset.word) {
            canProceed = false;
        }
    });

    if (canProceed) {
        const sections = document.querySelectorAll('div[id^="ejercicio"]');
        sections.forEach(section => {
            section.style.display = 'none';
        });
        document.getElementById(sectionId).style.display = 'block';
    } else {
        alert("Por favor, coloca una palabra en el espacio vacío antes de continuar.");
    }
}

function validateAndProceed(e) {
    const dropzone10 = document.getElementById('dropzone10');
    if (dropzone10.dataset.word) {
        capturarResultadoTest3();
        window.location.href = "../completa-palabra/completa-palabra.php";
    } else {
        e.preventDefault();  
        alert("Por favor, coloca una palabra en el espacio vacío antes de continuar.");
    }
}

function capturarResultadoTest3() {
    const results = [
        { dropzone: 'dropzone1', correctWord: 'paleta' },
        { dropzone: 'dropzone2', correctWord: 'camisa' },
        { dropzone: 'dropzone3', correctWord: 'bicicleta' },
        { dropzone: 'dropzone4', correctWord: 'helicoptero' },
        { dropzone: 'dropzone5', correctWord: 'cansado' },
        { dropzone: 'dropzone6', correctWord: 'piscina' },
        { dropzone: 'dropzone7', correctWord: 'cangrejo' },
        { dropzone: 'dropzone8', correctWord: 'jirafa' },
        { dropzone: 'dropzone9', correctWord: 'zapato' },
        { dropzone: 'dropzone10', correctWord: 'pelota' }
    ];

    let correctCount = 0;

    results.forEach(result => {
        const dropzone = document.getElementById(result.dropzone);
        if (dropzone.textContent.toLowerCase() === result.correctWord) {
            correctCount++;
            dropzone.classList.add('correct');
        } else {
            dropzone.classList.add('incorrect');
        }
    });

    const resultados = {
        test: 3,
        correct: correctCount,
    }

    fetch('../guardar_resultados.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(resultados)
    })
    .then(response => response.text())
    .then(data => {
        console.log('Respuesta del servidor:', data);
    })
    .catch(error => {
        console.error('Error al enviar los resultados:', error);
    });
}

document.querySelectorAll('div[id^="ejercicio"]').forEach(section => {
    const nextButton = section.querySelector('button');
    if (nextButton) {
        nextButton.disabled = true;
    }
});
