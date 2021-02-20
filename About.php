<!DOCTYPE html>
<html>
  <head>
    <title>About</title>
    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
    <link rel="icon" href="bank.jpg" type="image/gif" sizes="16x16">
    <link href='HeaderFooter.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/f681854d4a.js" crossorigin="anonymous"></script>
    <style type="text/css">
      .footer
      {

      }
      .info
      {
        background-color: #F6F3F4;
        width: 60%;
        margin:100px;
        margin-left: 250px;       
        padding: 50px;
      }
      .info li
      {
        margin-top: 20px;
        margin-bottom: 20px;
      }
      .info h1
      {
        text-align: center;
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
  <div class="info">
    <h1>Basic Banking System</h1>
  This website is created for the Graduate Rotational Internship Program(GRIP) at <b>The Sparks Foundation</b>. The aim of the website was to create a basic banking system. 
  The requirements of the website are:
  <ul>
    <li> Create a simple dynamic website which has the following specs.</li>
    <li>Start with creating a dummy data in database for upto 10
  customers. Database options: Mysql, Mongo, Postgres, etc.
  Customers table will have basic fields such as name, email,
  current balance etc. Transfers table will record all transfers
  happened.</li>
    <li> Flow: Home Page > View all Customers > Select and View one
  Customer > Transfer Money > Select customer to transfer to >
  View all Customers .</li>
    <li> No Login Page. No User Creation. Only transfer of money
  between multiple users.</li>
  </ul>
  <p> Project Details:
    <ul style="list-style-type: none;">
      <li>Created By: Riya Tendulkar</li>
      <li>GRIP Batch: GRIP FEB 21</li>
      <li>Languages Used: HTML, CSS, JavaScript, PHP</li>
      <li>Database: SQL using PHPMyAdmin</li>
    </ul>
  </div>
      <div class="footer">
      <div class="titleName">
        Sparks Bank
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
