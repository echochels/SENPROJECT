<?php
	session_start();
	if($_SESSION['login_user']==null){
	header('location:index.php');
	}
?>
<!doctype html>
	<html lang="en">
		<head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Bank app</title>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
            <link rel="stylesheet" href="bankstyle.css">
        </head>
        <body>
            <div class="herdiv">
                <a href><i class="fas fa-user-circle fa-4x"></i></a><span style="font-size: xx-large;"><label id="lblGreetings"></span>
            </div>
            <div class="chelseadiv">
                <div class="loldiv">
                    <div class="thisdiv">
                        <i class="fas fa-toggle-on fa-2x">Hide Balance</i>
                        <h3>2270281480<br>Total Balance:** ***** **</h3>
                    </div>
                </div>
                <br>
                <div class="menudiv">
                    <h1>Recent Transactions</h1>
                    <a href><h2>View Transaction History</h2></a>
                </div>
                <br>
                <div class="menudiv"></div>
                <br>
                <div class="menudiv"></div>
                <br>
                <div class="menudiv"></div>
                <br>
                <div class="selector-menu">
                    <center>
                    <div class="icondiv"><a href="bankingapp.php"><i class="fas fa-university fa-4x"></i></a>
                    <span id="Home">Home</span></div></center>
                    <center>
                    <div class="icondiv"><a href="paybills.php"><i class="fas fa-id-card fa-4x"></i></a>
                    <span id="Pay bills">Pay bills</span></div></center>
                    <center>
                    <div class="icondiv"><a href="airtime.php"><i class="fas fa-mobile-alt fa-4x"></i></a>
                    <span id="Airtime">Airtime</span></div></center>
                    <center>
                    <div class="icondiv"> <a href="transfer.php"><i class="fas fa-exchange-alt fa-4x"></i></a>
                    <span id="Transfer">Transfer</span></div></center>
                    <center>
                    <div class="icondiv"><a href="more.php"><i class="fas fa-comment-dots fa-4x"></i></a>
                    <span id="Menu">Menu</span></div></center>
                </div>
            </div>
            </div>
            
            </div>
           
            </div>
        </body>
        <script>
        var myDate = new Date();
        var hrs = myDate.getHours ();
        var greet;
        if (hrs < 12)
            greet = 'Good Morning';
        else if (hrs >=12 && hrs <=17)
            greet = 'Good Afternoon';
        else if (hrs >= 17 && hrs<= 24 )
            greet = 'Good Evening';

        document.getElementById('lblGreetings').innerHTML = '<b>'+ greet +'</b>';
        </script>
    </html>