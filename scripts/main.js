// Get all elements with the .seat class
const seats = document.querySelectorAll('.seat');
var rootStyles = getComputedStyle(document.documentElement);
var availableColor = rootStyles.getPropertyValue("--primary-color");
var selectedColor = rootStyles.getPropertyValue("--accent-color");
var reservedColor = "white"

// Add a click event listener to each seat
seats.forEach(seat => {
  seat.addEventListener('click', () => {
    seat.setAttribute('selected', 'true')
  });
});