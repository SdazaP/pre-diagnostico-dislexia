const options = document.querySelectorAll('.option');
const dropzones = document.querySelectorAll('.pattern-slot[data-exercise]');

options.forEach(option => {
    option.addEventListener('dragstart', dragStart);
});

dropzones.forEach(dropzone => {
    dropzone.addEventListener('dragover', dragOver);
    dropzone.addEventListener('drop', drop);
});

function dragStart(e) {
    e.dataTransfer.setData('text/plain', e.target.dataset.answer + ',' + e.target.dataset.exercise);
}

function dragOver(e) {
    e.preventDefault();
}

function drop(e) {
    e.preventDefault();
    const data = e.dataTransfer.getData('text/plain').split(',');
    const answer = data[0];
    const exercise = data[1];
    const dropzone = e.target;
    const draggedOption = document.querySelector(`[data-answer="${answer}"][data-exercise="${exercise}"]`);

    if (!dropzone.classList.contains('option') && dropzone.dataset.exercise === exercise) {
        dropzone.style.backgroundColor = draggedOption.style.backgroundColor;
        dropzone.style.borderRadius = draggedOption.style.borderRadius || '0';
        dropzone.style.clipPath = draggedOption.style.clipPath || 'none';
        dropzone.style.width = draggedOption.style.width;
        dropzone.style.height = draggedOption.style.height;
        dropzone.dataset.answer = answer;

        const currentSection = dropzone.closest('div[id^="exercise"]');
        const nextButton = currentSection.querySelector('button, a');
        if (nextButton) {
            nextButton.disabled = false;
        }

        if (exercise === "10") {
            const finalizeButton = document.getElementById('finalizeButton');
            if (finalizeButton) {
                finalizeButton.disabled = false;
            }
        }
    }
}

function nextSection(nextSectionId, currentSectionId) {
    const dropzones = document.querySelectorAll(`#${currentSectionId} .pattern-slot[data-exercise]`);

    let canProceed = true;
    dropzones.forEach(dropzone => {
        if (!dropzone.dataset.answer) {
            canProceed = false;
        }
    });

    if (canProceed) {
        document.querySelectorAll('.container > div').forEach(div => div.style.display = 'none');
        document.getElementById(nextSectionId).style.display = 'block';
    } else {
        alert("Por favor, coloca una figura en el espacio vacío antes de continuar.");
    }
}

function validateAndProceed() {
    const dropzone10 = document.getElementById('dropzone10');
    if (dropzone10.dataset.answer) {
        capturarResultadoTest2();
        window.location.href = "../palabras-imagenes/palabras-imagenes.php";
    } else {
        alert("Por favor, coloca una figura en el espacio vacío antes de continuar.");
    }
}

function capturarResultadoTest2() {
    let correct = 0;
    let incorrect = 0;

    const checkDropzone = (id, correctAnswer) => {
        const dropzone = document.getElementById(id);
        if (dropzone.dataset.answer === correctAnswer) {
            dropzone.classList.add('correct');
            correct++;
        } else {
            dropzone.classList.add('incorrect');
            incorrect++;
        }
    };

    checkDropzone('dropzone1', 'option3');
    checkDropzone('dropzone2', 'option2');
    checkDropzone('dropzone3', 'option1');
    checkDropzone('dropzone4', 'option3');
    checkDropzone('dropzone5', 'option3');
    checkDropzone('dropzone6', 'option3');
    checkDropzone('dropzone7', 'option5');
    checkDropzone('dropzone8', 'option2');
    checkDropzone('dropzone9', 'option5');
    checkDropzone('dropzone10', 'option5');

    const resultados = {
        test: 2,
        correct: correct,
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

document.querySelectorAll('.container > div').forEach(section => {
    const nextButton = section.querySelector('button');
    if (nextButton) {
        nextButton.disabled = true;
    }
});
