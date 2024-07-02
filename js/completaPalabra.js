const syllables = document.querySelectorAll('.syllable');
const dropzones = document.querySelectorAll('.word-slot');

syllables.forEach(syllable => {
    syllable.addEventListener('dragstart', dragStart);
});

dropzones.forEach(dropzone => {
    dropzone.addEventListener('dragover', dragOver);
    dropzone.addEventListener('drop', drop);
});

function dragStart(e) {
    e.dataTransfer.setData('text/plain', e.target.dataset.syllable);
}

function dragOver(e) {
    e.preventDefault();
}

function drop(e) {
    e.preventDefault();
    const data = e.dataTransfer.getData('text/plain');
    const dropzone = e.target;

    if ((dropzone.id === 'dropzone1' && data === 'bra') ||
        (dropzone.id === 'dropzone2' && data === 'mi') ||
        (dropzone.id === 'dropzone3' && data === 'ci') ||
        (dropzone.id === 'dropzone4' && data === 'li') ||
        (dropzone.id === 'dropzone5' && data === 'do')) {
        dropzone.textContent = data;
        dropzone.classList.add('correct');
    } else {
        alert('Respuesta incorrecta, intenta nuevamente.');
    }
}