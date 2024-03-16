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
