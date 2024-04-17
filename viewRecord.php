<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Untitled Document</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet" />
    <link href="styles.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <!-- body code goes here -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container justify-content-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent1">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link a" href="home.html"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item">
                        <strong><a class="nav-link" href="aboutUs.html">About&nbsp;</a></strong>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="#"><img src="carlogo.png" width="40" height="40" alt="" /></a>
                    </li>
                    <li class="nav-item">
                        <strong><a class="nav-link" href="available.html">Menu&nbsp;</a></strong>
                    </li>
                    <li class="nav-item">
                        <strong><a class="nav-link" href="contactUs.html">Contact Us&nbsp;</a></strong>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="container">
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
            //create and execute query
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);
            //check if records were returned
            if ($result->num_rows > 0) {
                //create a table to display the record
                echo '<table cellpadding=10 cellspacing=0 border=1 align="center">';
                echo '<tr><td align="center"><b>No</b></td>
               <td align="center"><b>UserName</b></td>
               <td align="center"><b>Contact</b></td>
               <td align="center"><b>Email</b></td>
               <td align="center"><b>Quantity Burger</b></td>
               <td align="center"><b>Quantity Pasta</b></td>
               <td align="center"><b>Quantity Steaks</b></td>
               <td align="center"><b>Quantity Chicken Wings</b></td></tr>';

                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td align="center">' . $row["Bil"] . '</td>';
                    echo '<td align="center">' . $row["userName"] . '</td>';
                    echo '<td align="center">' . $row["userContact"] . '</td>';
                    echo '<td align="center">' . $row["userEmail"] . '</td>';
                    echo '<td align="center">' . $row["qtyBurger"] . '</td>';
                    echo '<td align="center">' . $row["qtyPasta"] . '</td>';
                    echo '<td align="center">' . $row["qtySteak"] . '</td>';
                    echo '<td align="center">' . $row["qtyWings"] . '</td>';
                    echo '</tr>';
                }
            } else {
                echo "0 results"; //if no record found in the database
            }
            //close connection
            $conn->close();
            ?>

        </div>

    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>


</body>

</html>