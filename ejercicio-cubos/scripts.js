function nextSection(nextSectionId) {
    document.querySelectorAll('.container > div').forEach(div => div.style.display = 'none');
    document.getElementById(nextSectionId).style.display = 'block';
}

const options = document.querySelectorAll('.option');
const dropzones = document.querySelectorAll('.pattern-slot');

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
        dropzone.style.width = draggedOption.style.width;  // Mantener el nuevo tamaño
        dropzone.style.height = draggedOption.style.height; // Mantener el nuevo tamaño
        dropzone.dataset.answer = answer;
    }
}

function checkAnswers() {
    let correct = 0;
    let incorrect = 0;

    // Ejercicio 1
    const dropzone1 = document.getElementById('dropzone1');
    if (dropzone1.dataset.answer === 'option3') {
        dropzone1.classList.add('correct');
        correct++;
    } else {
        dropzone1.classList.add('incorrect');
        incorrect++;
    }

    // Ejercicio 2
    const dropzone2 = document.getElementById('dropzone2');
    if (dropzone2.dataset.answer === 'option2') {
        dropzone2.classList.add('correct');
        correct++;
    } else {
        dropzone2.classList.add('incorrect');
        incorrect++;
    }

    // Ejercicio 3
    const dropzone3 = document.getElementById('dropzone3');
    if (dropzone3.dataset.answer === 'option1') {
        dropzone3.classList.add('correct');
        correct++;
    } else {
        dropzone3.classList.add('incorrect');
        incorrect++;
    }

    // Ejercicio 4
    const dropzone4 = document.getElementById('dropzone4');
    if (dropzone4.dataset.answer === 'option3') {
        dropzone4.classList.add('correct');
        correct++;
    } else {
        dropzone4.classList.add('incorrect');
        incorrect++;
    }

    // Ejercicio 5
    const dropzone5 = document.getElementById('dropzone5');
    if (dropzone5.dataset.answer === 'option3') {
        dropzone5.classList.add('correct');
        correct++;
    } else {
        dropzone5.classList.add('incorrect');
        incorrect++;
    }

    // Ejercicio 6
    const dropzone6 = document.getElementById('dropzone6');
    if (dropzone6.dataset.answer === 'option3') {
        dropzone6.classList.add('correct');
        correct++;
    } else {
        dropzone6.classList.add('incorrect');
        incorrect++;
    }

    // Ejercicio 7
    const dropzone7 = document.getElementById('dropzone7');
    if (dropzone7.dataset.answer === 'option5') {
        dropzone7.classList.add('correct');
        correct++;
    } else {
        dropzone7.classList.add('incorrect');
        incorrect++;
    }

    // Ejercicio 8
    const dropzone8 = document.getElementById('dropzone8');
    if (dropzone8.dataset.answer === 'option2') {
        dropzone8.classList.add('correct');
        correct++;
    } else {
        dropzone8.classList.add('incorrect');
        incorrect++;
    }

    // Ejercicio 9
    const dropzone9 = document.getElementById('dropzone9');
    if (dropzone9.dataset.answer === 'option5') {
        dropzone9.classList.add('correct');
        correct++;
    } else {
        dropzone9.classList.add('incorrect');
        incorrect++;
    }

    // Ejercicio 10
    const dropzone10 = document.getElementById('dropzone10');
    if (dropzone10.dataset.answer === 'option5') {
        dropzone10.classList.add('correct');
        correct++;
    } else {
        dropzone10.classList.add('incorrect');
        incorrect++;
    }

    alert(`Correctas: ${correct}, Incorrectas: ${incorrect}`);
}
