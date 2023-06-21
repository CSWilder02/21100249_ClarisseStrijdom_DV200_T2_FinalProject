  // Check if login information is stored in localStorage
  if (!localStorage.getItem("logins")) {
    // Create dummy login information
    var logins = [
      { mobileNumber: "123456789", password: "password1", medicalAidNumber: "A12345" },
      { mobileNumber: "987654321", password: "password2", medicalAidNumber: "B54321" },
      { mobileNumber: "555555555", password: "password3", medicalAidNumber: "C67890" }
    ];

    // Store login information in localStorage
    localStorage.setItem("logins", JSON.stringify(logins));
  }

  // Function to handle login
  function login() {
    var mobileNumber = document.getElementById("input4").value;
    var password = document.getElementById("input5").value;
    var medicalAidNumber = document.getElementById("input6").value;

    // Retrieve login information from localStorage
    var logins = JSON.parse(localStorage.getItem("logins"));

    // Check if provided login information matches stored information
    var match = false;
    for (var i = 0; i < logins.length; i++) {
      var login = logins[i];
      if (
        login.mobileNumber === mobileNumber &&
        login.password === password &&
        login.medicalAidNumber === medicalAidNumber
      ) {
        match = true;
        break;
      }
    }

    // Handle login result
    if (match) {
      // Login successful
      localStorage.setItem("isLoggedIn", "true");
      window.location.href = "index.php"; // Redirect to dashboard or desired page
    } else {
      // Login failed
      localStorage.setItem("isLoggedIn", "false");
      window.location.href = "error.php"; // Redirect to error page
    }
  }