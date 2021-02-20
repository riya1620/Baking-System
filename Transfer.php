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
    $sql1="SELECT * from customers";
    $rows1=($conn->query($sql1));
     $rows3=($conn->query($sql1));
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transfer Money</title>
		<link rel="icon" href="bank.jpg" type="image/gif" sizes="16x16">
		<link href='HeaderFooter.css' rel='stylesheet'>
		<script src="https://kit.fontawesome.com/f681854d4a.js" crossorigin="anonymous"></script>
		<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>		
		<style>
			body
			{
				background-color: #F6F3F4;
				font-family:'ABeeZee',serif, Book Antiqua;

			}
			h1
			{
			  font-family: 'Sofia',serif, Book Antiqua;
			}
			select,input
			{
				margin:20px;
				width: 25%;
				font-size: 20px;
				font-family:'ABeeZee',serif, Book Antiqua;
			}
			option
			{
				font-family:'ABeeZee',serif, Book Antiqua;
				width: 100%;
				font-size: 18px;
			}
			label
			{
				color: #6b011f;
				font-weight: 600;				
			}
			input[type=submit]:hover
			{
				background-color:  #6b011f;
			}
			.footer
			{
				margin-top: 100px;
				position: absolute;
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
		<div style="margin-top: 50px; margin-left: 280px;text-align: center;width: 60%;background-color: rgba(255,255,255,0.6)  ;font-size: 20px;">
			<h1>Transfer Money</h1>
			<form method="post" action="TransferMoneyPhp.php">
			  <label for="sender">Choose a sender:</label>
			  <select id="sender" name="sender">
			  	<option value="" disabled hidden selected>Sender</option>
<?php
				if($rows1->num_rows>0)
				{
				  	while($rows=$rows1->fetch_assoc())
				  	{
?>
				    	<option value="<?php echo $rows['id']?>"><?php echo $rows['name']?></option>
<?php 
					} 
				}
				else
				{
?>

						<option value="" disabled>No Customers</option>
<?php
				}
?>
			  </select>
			  <br>
			  <label for="receiver">Choose a receiver:</label>
			  <select id="receiver" name="receiver">
			  <option value="" disabled hidden selected>Receiver</option>
<?php
			    if($rows3->num_rows>0)
			    {
				  	while($rows2=$rows3->fetch_assoc())
				  	{
?>
				    	<option value="<?php echo $rows2['id']?>"><?php echo $rows2['name']?></option>
<?php 
					}
				}
				else
				{
?>
						<option value="" disabled>No Customers</option>
<?php
				}
?>
			  </select>
			  <br>
			  <label for="amount" >Amount: </label>
			  <input type="number" name="amount" id="amount" required /><br>
			  <input type="submit" name="submit">
			</form>
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