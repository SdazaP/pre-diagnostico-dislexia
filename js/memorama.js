const cardsArray = ['images/Logo.png', 'images/check.png', 'images/consecuencias.jpeg', 'images/mitos.jpeg', 'images/chat.png'];
let chosenCards = [];
let matchedCards = [];

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

    if (matchedCards.length === cardsArray.length * 2) {
        mostrarModalDeGanador();
    }
}

function capturarResultadoTest1() {
    const resultado = 'Resultado Memorama';
    resultados.push({
        test: 1,
        resultado: resultado
    });
}

function mostrarModalDeGanador() {
    $('#modalGanador').modal('show');
    capturarResultadoTest1();
}
document.addEventListener('DOMContentLoaded', createCards);