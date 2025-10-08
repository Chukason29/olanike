<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="God's Greatness Achievers Int'l Church">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/livestream.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6c1ada6317.js" crossorigin="anonymous"></script>
    <title>GGAC | Prayer Request</title>
    <link rel="icon" href="./img/ggac-logo.png" type="image/png">
  <style>

  .prayer-request-form {
      max-width: 500px;
      margin: 50px auto;
      padding: 20px;
      border: 2px solid #4CAF50; /* Green border */
      border-radius: 10px;
      background-color: #f9f9f9;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      font-family: Arial, sans-serif;
    }

    /* Styling for the form header */
    .prayer-request-form h2 {
      text-align: center;
      color: #4CAF50; /* Matching green for the header */
      margin-bottom: 20px;
    }

    /* Style each input field */
    .prayer-request-form label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .prayer-request-form input[type="text"],
    .prayer-request-form input[type="email"],
    .prayer-request-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    .prayer-request-form textarea {
      height: 150px;
      resize: vertical; /* Allow users to resize the textarea vertically */
    }

    /* Style for the submit button */
    .prayer-request-form button {
      width: 100%;
      padding: 15px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 18px;
      cursor: pointer;
    }

    .prayer-request-form button:hover {
      background-color: #45a049; /* Darker green when hovered */
    }


    @media (min-width: 601px) {
      .navbar {
        background-color: #333;
      }

      .navbar-nav {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        width: 30%;
      }

      .navbar-nav .nav-item .nav-link {
        color: white;
        font-size: 13px;
      }

      .navbar-nav .nav-item .nav-link:hover {
        color: yellowgreen;
      }
    }

    @media (max-width: 600px) {
      .navbar-nav {
        flex-direction: row;
        align-items: center;
        gap: 50px;
        font-size: larger;
        padding: 0;
      }

      .navbar-brand {
        margin-bottom: 5px;
      }
    }

    .header {
      text-align: right;
      position: absolute;
      top: 20%;
      right: 10%;
      color: white;
      z-index: 10;
    }

    .header h1 {
      font-size: 48px;
      margin: 0;
      font-weight: bold;
    }

    .header span {
      font-size: 24px;
    }

    .header-image img {
      width: 100%;
      height: auto;
      object-fit: cover;
      position: relative;
    }

    .drawer {
      height: 100px;
      width: 100px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #333;
      overflow-x: scroll;
      transition: 0.3s;
    }

    .drawer ul {
      list-style-type: none;
      padding: 0;
    }

    .drawer ul li {
      padding: 5px;
    }

    .drawer ul li a {
      text-decoration: none;
      color: white;
      display: block;
    }

    .drawer ul li a:hover {
      background-color: #575757;
    }

    .hamburger {
      font-size: 30px;
      cursor: pointer;
      padding: 16px;
    }

    .call {
      position: relative;
      width: 100%;
      max-width: 600px;
    }

    .call img {
      width: 220%;
      height: auto;
      display: block;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .call-link {
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-decoration: none;
      font-size: 18px;
      margin: 10px 0;
      padding: 10px 20px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 5px;
      width: 80%;
      transition: background 0.3s ease;
    }

    .call-link:hover {
      background: rgba(255, 255, 255, 0.4);
    }

    .call-link i {
      margin-right: 10px;
      font-size: 24px;
    }

    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 20px 0;
      width: 100%;
    }

    .footer .container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .footer .social-media {
      margin-bottom: 10px;
    }

    .footer .social-icon {
      margin: 0 10px;
      color: white;
      font-size: 24px;
      transition: color 0.3s ease;
    }

    .footer .social-icon:hover {
      color: #0d6efd;
    }

    .footer p {
      margin: 0;
      font-size: 14px;
    }

    @media (max-width: 600px) {
      .call img {
        width: 50%;
        height: auto;
      }

      .call-link {
        font-size: 10px;
        padding: 5px 12px;
      }

      .call-link i {
        font-size: 10px;
      }

      .footer p {
        font-size: 12px;
      }
    }
  </style>
</head>

<body>
  
<?php
  include "header.php";
?>


  <!-- Header Image -->

  <div class="prayer-request-form">
    <h2>Prayer Request Form</h2>
    
    <form action="#" method="POST">
      <label for="name">Your Name</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>

      <label for="email">Your Email</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>

      <label for="request">Prayer Request</label>
      <textarea id="request" name="request" placeholder="Enter your prayer request" required></textarea>

      <button type="submit">Submit Prayer Request</button>
    </form>
  </div>

  <?php
  include "footer.php";
?>
</body>

</html>
