const seats = document.querySelectorAll('.seat');

seats.forEach(seat => {
  seat.addEventListener('click', () => {
    if (seat.hasAttribute("reserved")) {
      return; // Don't toggle if reserved
    }
    if (seat.id == "A-0" || seat.id == "A-9"){
      return;
    }
    
    if (seat.hasAttribute("selected")) {
      seat.removeAttribute("selected");
      removeSeatName(seat.id);
    } else {
      seat.setAttribute("selected", "true");
      addSeatName(seat.id);
    }
  });
});


seatDiv = document.querySelector('.selected-seats');
price = document.querySelector('#price');
discount = document.querySelector('#discount');
tax = document.querySelector('#tax');
total = document.querySelector('#total');

seatDiv.addEventListener('DOMSubtreeModified', () => {
  ticketsPrice = seatDiv.childElementCount * 10;
  price.textContent = "$" + ticketsPrice;
  tax.textContent = "$" + (ticketsPrice * 0.12).toFixed(2);
  total.textContent = "$" + (ticketsPrice * 1.12).toFixed(2);

});

function addSeatName(seatId) {
  const selectedSeatsContainer = document.querySelector('.selected-seats');
  const seatElement = document.createElement('p');
  seatElement.textContent = seatId;
  selectedSeatsContainer.appendChild(seatElement);  
}

function removeSeatName(seatId) {
  const selectedSeatsContainer = document.querySelector('.selected-seats');
  const seatElements = selectedSeatsContainer.querySelectorAll('p');
  seatElements.forEach(seatElement => {
    if (seatElement.textContent === seatId) {
      seatElement.remove();
    }
  });
}
