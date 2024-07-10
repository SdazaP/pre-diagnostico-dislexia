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
    dropzone.textContent = data;
}

function nextSection(sectionId) {
    const sections = document.querySelectorAll('div[id^="ejercicio"]');
    sections.forEach(section => {
        section.style.display = 'none';
    });
    document.getElementById(sectionId).style.display = 'block';
}

function capturarResultadoTest4() {
    const results = [
        { dropzone: 'dropzone1', correctSyllable: 'pa' },
        { dropzone: 'dropzone2', correctSyllable: 'mi' },
        { dropzone: 'dropzone3', correctSyllable: 'ci' },
        { dropzone: 'dropzone4', correctSyllable: 'li' },
        { dropzone: 'dropzone5', correctSyllable: 'do' },
        { dropzone: 'dropzone6', correctSyllable: 'ci' },
        { dropzone: 'dropzone7', correctSyllable: 'jo' },
        { dropzone: 'dropzone8', correctSyllable: 'ji' },
        { dropzone: 'dropzone9', correctSyllable: 'pa' },
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

    resultados.push({
        test: 4,
        correct: correctCount,
        incorrect: results.length - correctCount
    });

    enviarResultados();
}

document.getElementById('finalizeButton').addEventListener('click', capturarResultadoTest4);
