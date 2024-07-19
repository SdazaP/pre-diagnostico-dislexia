const cardsArray = ['images/helicoptero.png', 'images/jirafa.png', 'images/cangrejo.png', 'images/pelota.png', 'images/zapato.png'];
const divParaActivar = document.getElementById('div-btn-sig');
let chosenCards = [];
let matchedCards = [];
let intentos = 0; 
let inicioTiempo = new Date().getTime();

window.addEventListener('beforeunload', function (event) {
    let endTime = new Date().getTime();
    let timeSpent = (endTime - startTime)

    const Tprueba = {
        test: 1,
        tiempo: timeSpent
    }

    const url = 'db/log-time.php';
    const data = JSON.stringify(Tprueba);

    navigator.sendBeacon(url, data);

    console.log('Datos enviados correctamente a log-time.php');

});

function shuffleCards(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
}

function createCards() {
    const memoryCards = document.getElementById('memory-cards');
    const shuffledCards = shuffleCards(cardsArray.concat(cardsArray));

    shuffledCards.forEach(card => {
        const div = document.createElement('div');
        div.classList.add('memo-card');
        div.dataset.card = card;
        memoryCards.appendChild(div);
        div.addEventListener('click', flipCard);
    });
}

function flipCard() {
    if (chosenCards.length < 2 && !chosenCards.includes(this) && !this.classList.contains('flipped')) {
        this.style.backgroundImage = `url(${this.dataset.card})`;
        this.classList.add('flipped');
        chosenCards.push(this);

        if (chosenCards.length === 2) {
            setTimeout(checkForMatch, 1000);
        }
    }
}

function checkForMatch() {
    const [card1, card2] = chosenCards;
    
    if (card1.dataset.card === card2.dataset.card) {
        matchedCards.push(card1, card2);
        card1.removeEventListener('click', flipCard);
        card2.removeEventListener('click', flipCard);
    } else {
        card1.style.backgroundImage = '';
        card2.style.backgroundImage = '';
        card1.classList.remove('flipped');
        card2.classList.remove('flipped');
    }

    chosenCards = [];
    intentos++;

    if (matchedCards.length === cardsArray.length * 2) {
        mostrarModalDeGanador();
        const resultados = {
            test: 1,
            correct: intentos
        }
    
        fetch('guardar_resultados.php', {
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
}

function mostrarModalDeGanador() {
    $('#modalGanador').modal('show');
}
document.addEventListener('DOMContentLoaded', createCards);