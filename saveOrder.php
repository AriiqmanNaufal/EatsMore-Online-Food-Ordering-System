<html>
<link href="styles.css" rel="stylesheet" type="text/css" />
<head>
    <title>Ordered Food</title>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet" />
    <link href="styles.css" rel="stylesheet" type="text/css" />
    
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light">
      <div class="container justify-content-center">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent1"
          aria-controls="navbarSupportedContent1"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse flex-grow-0"
          id="navbarSupportedContent1"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link a" href="home.html"><strong>Home</strong></a>
            </li>
            <li class="nav-item">
              <strong
                ><a class="nav-link" href="aboutUs.html">About&nbsp;</a></strong
              >
            </li>
            <li class="nav-item">
              <a class="navbar-brand" href="home.html"
                ><img src="carlogo.png" width="50" height="40" alt=""
              /></a>
            </li>
            <li class="nav-item">
              <strong
                ><a class="nav-link" href="available.html"
                  >Menu&nbsp;</a
                ></strong
              >
            </li>
            <li class="nav-item">
              <strong
                ><a class="nav-link" href="contactUs.html"
                  >Contact Us&nbsp;</a
                ></strong
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php

    
    extract($_POST);
    ?>
    <h3 style="margin-top: 15px;
			   text-align: center">Ordered Food</h3>
    <table  style="margin-top: 15px;
			   text-align: center;
			   margin-left: 450px;
			   padding: 5px">

        <tr>
            <td>Cheese Burger</td>
            <td>:</td>
            <td><b><?php print($qtyBurger) ?></b></td>
        </tr>
        <tr>
            <td>Carbonara Pasta</td>
            <td>:</td>
            <td><b><?php print($qtyPasta) ?></b></td>
        </tr>
        <tr>
            <td>Angus Steak</td>
            <td>:</td>
            <td><b><?php print($qtySteak) ?></b></td>
        </tr>
        <tr>
            <td>Buffalo Chicken Wings</td>
            <td>:</td>
            <td><b><?php print($qtyWings) ?></b></td>
        </tr>
        <tr>
            <td>Time</td>
            <td>:</td>
            <td><b><?php print($timeOrder) ?></b></td>
        </tr>
        <tr>
            <td>Date</td>
            <td>:</td>
            <td><b><?php print($dateOrder) ?></b></td>
        </tr>


    </table>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //create query
    $sql = "UPDATE users 
            SET qtyBurger = '$qtyBurger', qtyPasta = '$qtyPasta', qtySteak = '$qtySteak', qtyWings = '$qtyWings', timeOrder = '$timeOrder', dateOrder = '$dateOrder'
            ORDER BY Bil DESC
            LIMIT 1";

    //execute query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    //close connection
    $conn->close();
    ?>
    <br>
    <form>
        <input style="margin-left: 600px" class="btn" type="button" name="printButton" onClick="window.print()" value="Print">
		
    </form>
	  <a href="payment.html"><button class="btn" style="margin-left: 565px">Make Payment</button></a>
	<div class="footerContainer">
      <div class="socialIcons">
        <a href="https://www.instagram.com/" target="_blank"
          ><img class="aca" src="igg.png" width="100%" height="100%"
        /></a>
        <a href="https://www.facebook.com/" target="_blank"
          ><img class="aca" src="fbb.png" width="100%" height="100%"
        /></a>
        <a href="https://twitter.com/" target="_blank"
          ><img class="aca" src="x.png" width="100%" height="100%"
        /></a>
      </div>
    </div>

    <div class="footerBottom">
      <p><strong>EatsMore</strong></p>
      <p>
        Copyright &copy,2022, Designed by <span class="designer">Ariiq. </span>
      </p>
    </div>
</body>

</html>