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
<html>
	<head>
		<title>Transfer Money</title>
		<link rel="icon" href="bank.jpg" type="image/gif" sizes="16x16">
		<link href='HeaderFooter.css' rel='stylesheet'>
		<script src="https://kit.fontawesome.com/f681854d4a.js" crossorigin="anonymous"></script>
		<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
		<style>
	    	#card 
	        {
	            position: relative;
	            width: 320px;
	            display: block;
	            margin: 40px auto;
	            text-align: center;
	            font-family: 'Source Sans Pro', sans-serif;
	        }
	        #upper-side 
	        {
	            padding: 2em;
	            background-color: #8BC34A;
	            display: block;
	            color: #fff;
	            border-top-right-radius: 8px;
	            border-top-left-radius: 8px;
	        }
	        #status 
            {
                font-weight: lighter;
                text-transform: uppercase;
                letter-spacing: 2px;
                font-size: 1em;
                margin-top: -.2em;
                margin-bottom: 0;
            }
            #lower-side 
            {
                padding: 2em 2em 5em 2em;
                background: #fff;
                display: block;
                border-bottom-right-radius: 8px;
                border-bottom-left-radius: 8px;
                border: solid #8BC34A;
            }
            #message 
            {
                margin-top: -.5em;
                color: #757575;
                letter-spacing: 1px;
            }
            #contBtn 
            {
                position: relative;
                top: 1.5em;
                text-decoration: none;
                background: #8bc34a;
                color: #fff;
                margin: auto;
                padding: .8em 3em; 
                box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
                border-radius: 25px;  
                transition: all .4s ease;
            }
            #contBtn:hover 
            {
                box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);                     
                transition: all .4s ease;
            }
           #upper-side1
            {
                padding: 2em;
                background-color: #6b011f;
                display: block;
                color: #fff;
                border-top-right-radius: 8px;
                border-top-left-radius: 8px;
            }
            #lower-side1
            {
                padding: 2em 2em 5em 2em;
                background: #fff;
                display: block;
                border-bottom-right-radius: 8px;
                border-bottom-left-radius: 8px;
                border: solid #6b011f;
            }
            #contBtn1 
            {
                position: relative;
                top: 1.5em;
                text-decoration: none;
                background: white;
                border: 1px solid black;
                color: black;
                margin: auto;
                padding: .8em 3em;               
                border-radius: 25px;  
	            transition: all .4s ease;
	        }
	        .footer
	        {
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
<?php
		if (isset($_POST["submit"]))
		{
			$date=date("Y-m-d");
			$sender_id=$_POST["sender"];
			$receiver_id=$_POST["receiver"];
			if ($sender_id==$receiver_id)
			{
?>
				<div id='card'>
			  	    <div id='upper-side1'>     
			            <h3 id='status'>Alert</h3>
			        </div>
			        <div id='lower-side1'>
			       		<p id='message'>
			                Sender and Receiver can not be the same!
			            </p>
			            <a href="Transfer.php" id="contBtn1">Go Back</a>
			        </div>
			    </div>
<?php
			}
			else
			{
				$amount=$_POST["amount"];
				$sql5="SELECT * from customers where id='$sender_id'";
				$senderDetails=($conn->query($sql5))->fetch_assoc();
				$senderBalance=$senderDetails['balance'];
				if ($senderBalance<$amount)
				{
?>
					<div id='card'>
	                    <div id='upper-side1'>     
	                        <h3 id='status'>Alert</h3>
	                    </div>
	                    <div id='lower-side1'>
	                        <p id='message'>
	                            Transfer money exceeds bank balance!
	                        </p>
	                    	<a href="Transfer.php" id="contBtn1">Go Back</a>
	                    </div>
	                </div>
<?php
				}
				else
				{
				
					$sql2="INSERT INTO transactions SET transaction_date='$date',  sender_id='$sender_id',receiver_id='$receiver_id',amount='$amount'";
					$sql3="UPDATE customers SET balance=balance-'$amount' where id='$sender_id'";
					$sql4="UPDATE customers SET balance=balance+'$amount' where id='$receiver_id'";
					$conn->query($sql2);
					$conn->query($sql3);
					$conn->query($sql4);
					?>
					<div id='card'>
		                <div id='upper-side'>     
		                    <h3 id='status'>Success</h3>
		                </div>
		                <div id='lower-side'>
		                    <p id='message'>
		                        Success! Your transaction is complete!
		                    </p>
		                    <a href="banking System.php" id="contBtn">Continue</a>
		                </div>
		            </div>
<?php	
				}
			}
				
		}
?>
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