<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hotel PARADISE - Contacts</title>

  <!-- Bootstrap -->
  <link href="../css/bootstrap.css" rel="stylesheet">
  <link href="../css/fonts.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/contacts.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  <!--Header_menu-->
  <div class="container-fluid header_menu">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-header">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"></a>
      </div>
      <div class="collapse navbar-collapse" id="nav-header">
        <ul class="nav navbar-nav">
          <li>
            <a href="../index.html">Hotel</a>
          </li>
          <li>
            <a href="rooms&suites.html">Rooms & Suits</a>
          </li>
          <li>
            <a href="reservation.php">Reservation</a>
          </li>
          <li>
            <a href="overview.html">About</a>
          </li>
          <li>
            <a href="contacts.php">Contacts</a>
          </li>
        </ul>
        <ul class="nav navbar-nav pull-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              En
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu lang" role="menu">
              <li>
                <a href="#">En</a>
              </li>
              <li>
                <a href="#">Ru</a>
              </li>
              <li>
                <a href="#">Ua</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--       end header_menu-->

  <div class="container-fluid header">
    <div class="header_grad"></div>
    <div class="container">
      <p class="h_label bottom">Contact information</p>
    </div>
  </div>
  <!--    end header-->

  <div class="container main_inner">
    <div class="cont">
      <h3>Our location</h3>
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3203.1806074254514!2d30.563631!3d36.597958999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c3b7a2bf1e45a7%3A0x4ba4e5170da1749e!2sHotel+Paradise!5e0!3m2!1sru!2sua!4v1427739166312" frameborder="0"></iframe>
      </div>
      
      <?php

        $name = $_GET['name'];
        $email = $_GET['email'];
        $subj = $_GET['subject'];
        $message = $_GET['message'];

        echo $html = 
          '<h3>Contact form</h3>
          <form method="GET" action="contacts.php">
            <div class="row cont_form">
              <div class="col-sm-12 col-md-4">
                <p>Name</p>
                <input name="name" type="text" class="form-control"></div>
              <div class="col-sm-12 col-md-4">
                <p>E-mail</p>
                <input name="email" type="text" class="form-control"></div>
              <div class="col-sm-12 col-md-4">
                <p>Subject</p>
                <select class="form-control" name="subject">
                  <option value="0" disabled selected>Select a subject</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>
              </div>
            </div>
            <div class="row cont_form">
              <div class="col-xs-12">
                <p>Message</p>
                <textarea name="message" class="form-control" rows="5"></textarea>
              </div>
            </div>
            <input name="submit" class="form_btn pull-right" type="submit" value="Send Message">';

        if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['subject']) && isset($_GET['message'])) {
          // mail($email, $subject, $message);
          echo $html =
          '<p class="send_succes pull-right">Message was successfuly sended</p>';
        }

        echo $html = 
          '</form>';
      ?>

    </div>
  </div>

  <!--       Footer-->
  <div class="container-fluid footer-wrap">
    <div class="container footer">
      <div class="col-xs-12 col-sm-4">
        <div class="row copyright">
          <p>&#169 2014 Paradise Hotel. All rights reserved.</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="row social">
          <a class="soc_twit" href="#"></a>
          <a class="soc_face" href="#"></a>
          <a class="soc_you" href="#"></a>
          <a class="soc_pin" href="#"></a>
          <a class="soc_flickr" href="#"></a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="row foot_menu">
          <a href="../index.html">Hotel</a>
          <a href="rooms&suites.html">Rooms & Suits</a>
          <a href="reservation.php">Reservation</a>
          <a href="contacts.php">Contacts</a>
        </div>
      </div>
    </div>
  </div>
  <!--        end footer-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/bootstrap.js"></script>
  <script src="../js/config.json"></script>
  <script src="../js/jquery-ui.min.js"></script>
  <script src="../js/main.js"></script>
</body>
</html>