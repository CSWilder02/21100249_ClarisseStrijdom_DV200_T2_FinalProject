function login() {
  // Retrieve input values
  var nameSurname = document.getElementById('input4').value;
  var password = document.getElementById('input5').value;
  var receptionistID = document.getElementById('input6').value;

  // Perform login validation
  if (nameSurname === 'John Doe' && password === 'password123' && receptionistID === '123456') {
    // Correct login credentials
    localStorage.setItem('isLoggedIn', 'true'); // Set the isLoggedIn flag in local storage
    window.location.href = 'index.php'; // Redirect to index.php
  } else {
    // Invalid login credentials
    document.getElementById('error').style.display = 'block'; // Show error message
    localStorage.removeItem('isLoggedIn'); // Clear the isLoggedIn flag from local storage
    window.location.href = 'error.php'; // Redirect to error.php
  }
}

// // Check if the user is already logged in
// window.onload = function() {
//   if (localStorage.getItem('isLoggedIn') === 'true') {
//     window.location.href = 'index.php'; // Redirect to index.php if already logged in
//   }
// };