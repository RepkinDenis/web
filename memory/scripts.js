const cards = document.querySelectorAll('.memory-card');
const moves = document.getElementById("moves-count");

let firstCard = null;
let secondCard = null;
let firstCardOpen = false;
let movesCount = 0;

for (let i = 0; i < cards.length; i++) {
  cards[i].addEventListener('click', show);
  let position = Math.floor(Math.random() * 100);
  cards[i].style.order = position;
}

function show() {
  if (this == firstCard) {
    return
  };
  if (secondCard!=null) {
    return
  };

  this.classList.add('open');

  if (!firstCardOpen) {
    firstCardOpen = true;
    firstCard = this;
    return;
  }

  secondCard = this;

  movesCounter();
  Match();

  if(movesCount>5){
    checkAllCardsFlipped();
  }
}

function movesCounter() {
  movesCount += 1;
  moves.innerHTML = `<span>Ходов:</span>${movesCount}`;
};

function checkAllCardsFlipped() {
  for (let i = 0; i < cards.length; i++) {
    if (!cards[i].classList.contains('open')) {
      return;
    }
  }

  document.getElementById('moves').value = movesCount;
  document.getElementById('insert_game').submit();
}

function Match() {
  if (firstCard.getAttribute('name') == secondCard.getAttribute('name')) {
    MatchYes();
    return;
  }

  MatchNo();
}

function removeOpen() {
  firstCard.classList.remove('open');
  secondCard.classList.remove('open');
  redoot();
}

function MatchNo() {
  setTimeout(removeOpen, 1000);
}

function MatchYes() {
  firstCard.removeEventListener('click', show);
  secondCard.removeEventListener('click', show);
  redoot();
}

function redoot() {
  firstCard = null;
  secondCard = null;
  firstCardOpen = false;
}