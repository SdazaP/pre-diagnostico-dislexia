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
        dropzone.style.width = draggedOption.style.width;  
        dropzone.style.height = draggedOption.style.height; 
        dropzone.dataset.answer = answer;
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

document.getElementById('finalizeButton').addEventListener('click', capturarResultadoTest2);
