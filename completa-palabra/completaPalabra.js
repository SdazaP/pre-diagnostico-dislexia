const syllables = document.querySelectorAll('.syllable');
const dropzones = document.querySelectorAll('.word-slot');
let inicioTiempo = new Date().getTime();

window.addEventListener('beforeunload', function (event) {
    let endTime = new Date().getTime();
    let timeSpent = (endTime - inicioTiempo);

    const Tprueba = {
        test: 4,
        tiempo: timeSpent
    };

    const url = '../db/log-time.php';
    const data = JSON.stringify(Tprueba);

    navigator.sendBeacon(url, data);

    console.log('Datos enviados correctamente a log-time.php');
});

syllables.forEach(syllable => {
    syllable.addEventListener('dragstart', dragStart);
});

dropzones.forEach(dropzone => {
    dropzone.addEventListener('dragover', dragOver);
    dropzone.addEventListener('drop', drop);
});

function dragStart(e) {
    if (e.target.classList.contains('static') || e.target.classList.contains('filled')) {
        e.preventDefault();
    } else {
        e.dataTransfer.setData('text/plain', e.target.dataset.syllable);
    }
}

function dragOver(e) {
    e.preventDefault();
}

function drop(e) {
    e.preventDefault();
    const data = e.dataTransfer.getData('text/plain');
    const dropzone = e.target;

    if (dropzone.classList.contains('word-slot') && !dropzone.dataset.syllable && dropzone.textContent.trim() === "") {
        dropzone.textContent = data;
        dropzone.dataset.syllable = data;
        dropzone.classList.add('filled');

        const currentSection = dropzone.closest('div[id^="ejercicio"]');
        const nextButton = currentSection.querySelector('button');
        if (nextButton) {
            nextButton.disabled = false;
        }
    }
}

function nextSection(sectionId, currentSectionId) {
    const dropzones = document.querySelectorAll(`#${currentSectionId} .word-slot[id^="dropzone"]`);

    let canProceed = true;
    dropzones.forEach(dropzone => {
        if (!dropzone.dataset.syllable) {
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
        alert("Por favor, coloca una sílaba en el espacio vacío antes de continuar.");
    }
}

function validateAndFinalize(e) {
    e.preventDefault();
    const dropzone10 = document.getElementById('dropzone10');

    if (dropzone10 && dropzone10.dataset.syllable) {
        capturarResultadoTest4();
        window.location.href = "../pre-reporte.php";
    } else {
        alert("Por favor, coloca una sílaba en el espacio vacío antes de continuar.");
    }
}

function capturarResultadoTest4() {
    const results = [
        { dropzone: 'dropzone1', correctSyllable: 'pa' },
        { dropzone: 'dropzone2', correctSyllable: 'mi' },
        { dropzone: 'dropzone3', correctSyllable: 'ci' },
        { dropzone: 'dropzone4', correctSyllable: 'li' },
        { dropzone: 'dropzone5', correctSyllable: 'ro' },
        { dropzone: 'dropzone6', correctSyllable: 'ci' },
        { dropzone: 'dropzone7', correctSyllable: 'jo' },
        { dropzone: 'dropzone8', correctSyllable: 'ji' },
        { dropzone: 'dropzone9', correctSyllable: 'ca' },
        { dropzone: 'dropzone10', correctSyllable: 'pe' }
    ];

    let correctCount = 0;

    results.forEach(result => {
        const dropzone = document.getElementById(result.dropzone);
        if (dropzone.textContent === result.correctSyllable) {
            correctCount++;
            dropzone.classList.add('correct');
        } else {
            dropzone.classList.add('incorrect');
        }
    });

    const resultados = {
        test: 4,
        correct: correctCount,
    };

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

const finalizeButton = document.getElementById('finalizeButton');
if (finalizeButton) {
    finalizeButton.addEventListener('click', validateAndFinalize);
}

document.querySelectorAll('div[id^="ejercicio"]').forEach(section => {
    const nextButton = section.querySelector('button');
    if (nextButton) {
        nextButton.disabled = true;
        nextButton.addEventListener('click', () => {
            const nextSectionId = nextButton.getAttribute('onclick').match(/'([^']+)'/)[1];
            const currentSectionId = section.id;
            nextSection(nextSectionId, currentSectionId);
        });
    }
});

// Evitar que las imágenes sean arrastrables
const images = document.querySelectorAll('.exercise-image img');
images.forEach(image => {
    image.addEventListener('dragstart', (e) => {
        e.preventDefault();
    });
});

// Evitar que las sílabas estáticas sean arrastrables y seleccionables
const staticSlots = document.querySelectorAll('.word-slot.static');
staticSlots.forEach(slot => {
    slot.addEventListener('dragstart', (e) => {
        e.preventDefault();
    });
    slot.addEventListener('selectstart', (e) => {
        e.preventDefault();
    });
});
