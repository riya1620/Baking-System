<?php
  function OpenCon()
  {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "Riya@123";
    $db = "sparks_bankingsystem";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);     
    return $conn;
  }     
  function CloseCon($conn)
  {
    $conn -> close();
  }
       
  $conn = OpenCon();
  if($conn === false)
  {
      die("ERROR: Could not connect. " . $conn->connect_error);
  }
?>
<!DOCTYPE html>
<html>
  <head>
      <link rel="icon" href="bank.jpg" type="image/gif" sizes="16x16">
      <link href="HeaderFooter.css" rel="stylesheet">
      <script src="https://kit.fontawesome.com/f681854d4a.js" crossorigin="anonymous"></script>
      <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
      <title>Customers</title>
      <style>
        .customersTable td,th,tr
        {
          padding: 10px;
          border-bottom-color: #6b011f;
          font-weight: 400;
        }
        .customersTable th
        {
          border-bottom: solid;
          border-bottom-color: #6b011f;
          background-color: #F6F3F4;   
          font-weight: 800;
          font-size: 18px;       
        }
        .customersTable
        {
          border-collapse: collapse;
          margin-top: 50px; 
          width: 100%;        
        }
        h1
        {
          font-family: 'Sofia',serif, Book Antiqua;
          font-size: 50px;
        }
        .footer
        {
          margin-top: 100px;
          
          bottom: 0;
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
    <div style="margin-top: 50px; margin-left: 150px;text-align: center;width: 80%;">
      <h1> Customers </h1>
      <table class="customersTable">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email-Id</th>
          <th>Mobile Number</th>
          <th>Balance</th>
        </tr>
<?php 
        $sqlID="SELECT * FROM customers";
        $resultID=($conn->query($sqlID));
        if($resultID->num_rows>0)
        {
        $counter=0;
        while($rows=$resultID->fetch_assoc())
        {
          if ($counter%2==0)
          {
?>

            <tr>
              <td><?php echo $rows['id'];?></td>
              <td><?php echo $rows['name'];?></td>
              <td><?php echo $rows['email'];?></td>
              <td><?php echo $rows['phnumber'];?></td>
              <td><?php echo $rows['balance'];?></td>
            </tr>
<?php
          }
          else
          {

?>
            <tr style="background-color:#F6F3F4; ">
              <td><?php echo $rows['id'];?></td>
              <td><?php echo $rows['name'];?></td>
              <td><?php echo $rows['email'];?></td>
              <td><?php echo $rows['phnumber'];?></td>
              <td><?php echo $rows['balance'];?></td>
            </tr>
<?php
          }
          $counter++;
        }
        }
        else
        {
?>
            <h1>No Customers to Display</h1>
<?php
        }
?>
      </table>
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

