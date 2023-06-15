<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="index.css">


    <script src="index.js"></script>

</head>
<body>
<div id="login">
    <img id="BigCyrcle" class="right" src="Images/BigCyrcle.png">
    <img id="illu1" class="right" src="Images/Illustration1.png" alt="">

    <h1 class="SignUp" style="padding-top: 60px">Login</h1>
    <h3>Welcome back! Ready to make a change?</h3>
    <input id="input4" type="text" placeholder="Mobile Number">
    <input id="input5" type="password" placeholder="Password">
    <input id="input6" type="text" placeholder="Medical Aid Number"><br>

    <button style="text-decoration: none; margin-top: 70px" class="btn-grad" onclick="login()">Login</button>
    
    <p id="error" style="color: red; display: none;">Invalid login credentials. Please try again.</p>
  </div>

</html>