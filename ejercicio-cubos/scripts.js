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

        // Habilitar el botón siguiente cuando se coloca una figura
        const currentSection = dropzone.closest('div[id^="exercise"]');
        const nextButton = currentSection.querySelector('button');
        if (nextButton) {
            nextButton.disabled = false;
        }
    }
}

document.querySelectorAll('.container > div').forEach(section => {
    const nextButton = section.querySelector('button');
    if (nextButton) {
        nextButton.disabled = true;
    }
});
