<!DOCTYPE html>
<html>
  <head>
    <title>Home Page</title>
    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
     <link rel="icon" href="bank.jpg" type="image/gif" sizes="16x16">
     <link href='HeaderFooter.css' rel='stylesheet'>
     <script src="https://kit.fontawesome.com/f681854d4a.js" crossorigin="anonymous"></script>
    <style>
      body
      {
        font-family: 'ABeeZee',serif, Book Antiqua;
      }
      body, html 
      {
        height: 100%;
        margin: 0;      
      }
      .bgImage 
      {
        background-image:  url("backgroundImage1.jpg");
        height: 80%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        width: 92%;
        margin-left: 55px;
        margin-top: 50px;
        margin-bottom: 50px;
      }
      .bgText 
      {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        background: rgba(0,0,0,0.2);
        padding: 50px;
      }
      .bgText button 
      {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 10px 25px;
        color: black;
        background-color: #ddd;
        text-align: center;
        cursor: pointer;
      }
      .bgText button a
      {
        text-decoration: none;
        color: black;
        font-family: 'ABeeZee', serif;
      }
      .bgText button:hover 
      {
        background-color: #6b011f;
        color: white;
      }

    </style>
  </head>
  <body>
    <header class="header">
      <div class="title"> 
        Sparks Bank
      </div>
      <ul>
        <li><a href="About.php">About</a></li>
        <li><a href="Transfer.php">Transfer</a></li>
        <li><a href="Transactions.php">History</a></li>
        <li><a href="DisplayCustomers.php">Customers</a></li>
        <li><a href="Banking System.php">Home</a></li>
      </ul>
    </header>
    <div class="bgImage">
      <div class="bgText">
        <h1 style="font-size:100px;">Sparks Bank</h1>
        <h2>Transactions made Easier</h2>
        <button><a href="Transfer.php">Transfer</button>
      </div>
    </div>
    <div class="footer">
      <div class="titleName">
        The Sparks Foundation
        <div class="footerCopyRight"><i class="fa fa-copyright" aria-hidden="true"></i>Riya Tendulkar 2021.</div>
      </div>
        <div class="footerPagesLinks">
            <button style="margin-left: 55px; "><a href="https://www.instagram.com/thesparksfoundation.info/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a></button>
            <button><a href="https://www.linkedin.com/company/sparks-foundation/" target="_blank"><i class="fa fa-linkedin"></i></a></button>
            <button><a href="https://www.facebook.com/thesparksfoundation.info/" target="_blank"><i class="fa fa-facebook"></i></a></button>
            <button><a href="https://www.thesparksfoundationsingapore.org/" target="_blank"><i class="fa fa-globe"></i></a></button><br>
        </div>
    </div>
  </body>
</html>
