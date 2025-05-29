<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">
  <title>About Us</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
    }

    html {
      box-sizing: border-box;
    }

    .row {
      margin-top: 30px;
      margin-left: 15px;
      ;
      width: 400px;
      border: 2px solid black;
    }

    .row h2 {
      padding-left: 20px;
      text-decoration: underline;
    }


    .card {
      padding-left: 20px;
      position: relative;
    }

    .column {
      margin-top: 10px;
      margin-left: 15px;
      ;
      width: 400px;
      border: 2px solid black;
      background-color: #000;
      color: white;
      font-size: 20px;
      text-align: center;
      text-transform: uppercase;
    }

    .about-section {
      padding: 50px;
      text-align: center;
      background-color: #474e5d;
      color: white;
    }

    .about-section h1 {
      text-decoration: underline;
      text-transform: uppercase;
    }

    .button {
      padding: 10px;
      color: white;
      background-color: #000;
      text-align: center;
      width: 95%;
    }

    .thank {
      font-size: 50px;
    }
    .thank h1{
      position: relative;
      top: -400px;
      width: 700px;
      text-align: right; 
      margin-left: 810px;
      border:2px solid #000;
      border-radius: 100px 0px 0px 100px;
      background-color: black;
      color:white;


    }
    
  </style>
</head>

<body>

  <div class="about-section">
    <h1>About the project</h1>
    <p>It is based on simple web designing model. At the Front-End portion, we used html, CSS, javascript programming to
      form the front-end part. At the Back-End portion, we have used PHP to connect the front-end portion with back-end
      part. Also, MySQL is used to store the database of the transaction with the date and time which is noticed in UPI
      apps such like G-Pay, Paytm, etc.But the most important part of our project is XAMPP Control Panel.The APACHE
      Module
      is used to mainly hold thissystem.</p>
  </div>

  <div class="row">
    <h2>OUR TEAM</h2>
    <p class="button">STUDENTS</p>
    <div class="card">
      <p>Sabyasachi Maity</p>
      <p>Sandip Manna</p>
      <p>Sangsaptak Sarkar</p>
      <p>Sanket Nandy</p>
      <p>Sattwik Adhikari</p>
    </div>

  </div>
  <div class="column">
    <p>special thanks to ms. silpi ghosh</p>
  </div>
  <div class="thank">
    <h1>Thank you !</h1>
  </div>
</body>

</html>