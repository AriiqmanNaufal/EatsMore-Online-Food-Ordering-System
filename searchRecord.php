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
  <div class="container">

    <body>
      <p>
      <h4>Search Record</h4>
      <form action="displayRecord.php" method="post">
        Username: <input name="userName" type="text" size="30"><br><br>
        <input style="display: flex;" class="btn" type="submit" name="Submit" value="Search">
      </form>
      </p>
    </body>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-3.4.1.min.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap-4.4.1.js"></script>

  <div class="footerContainer">
    <div class="socialIcons">
      <a href="https://www.instagram.com/" target="_blank"><img class="aca" src="igg.png" width="100%" height="100%" /></a>
      <a href="https://www.facebook.com/" target="_blank"><img class="aca" src="fbb.png" width="100%" height="100%" /></a>
      <a href="https://twitter.com/" target="_blank"><img class="aca" src="x.png" width="100%" height="100%" /></a>
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