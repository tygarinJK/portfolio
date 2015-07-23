<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Hotel PARADISE Reservation - Guest Information</title>

   <!-- Bootstrap -->
   <link href="../css/fonts.css" rel="stylesheet">
   <link href="../css/bootstrap.css" rel="stylesheet">
   <link href="../css/style.css" rel="stylesheet">
   <link href="../css/reserv.css" rel="stylesheet">

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
                  <a href="reservation.php" class="active disabled">Reservation</a>
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
         <p class="h_label bottom">Reservation</p>
      </div>
   </div>
   <!--     end header-->

   <div class="container main_inner">
      <div class="row">
            <div id="" class="main_inner_header">
               <a href="reservation.php"><span>1</span>Basic Information</a>
               <a href="reservation-sr.php"><span>2</span>Select Room</a>
               <a href="reservation-gi.php"><span>3</span>Guest Information</a>
               <a href="reservation-f.php"><span>4</span>Finish</a>
            </div>
         </div>
      <div class="row">
         <div class="col-sm-offset-2 col-sm-8">
            <div class="b_info">
               <h3>Guest information</h3>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam qui maxime, fugit officia id consequatur unde ipsum nam recusandae optio harum animi eius eveniet cupiditate, dicta veritatis alias accusamus aliquid assumenda beatae earum aliquam! Officiis quaerat maxime in modi distinctio!
               </p>
            </div>

            <?php

                  $ch_in_date = $_GET['ch_in_date'];
                  $ch_out_date = $_GET['ch_out_date'];
                  $num_of_rooms = $_GET['num_of_rooms'];
                  $adults = $_GET['adults'];
                  $child_0_5 = $_GET['child_0_5'];
                  $child_6_12 = $_GET['child_6_12'];
                  $child = $_GET['child'];


                  echo $html = 
                     '<form name="" method="GET" action="reservation-f.php">
                        <input name="ch_in_date" type="text" value="'.$ch_in_date.'" hidden>
                        <input name="ch_out_date" type="text" value="'.$ch_out_date.'" hidden>
                        <input name="num_of_rooms" type="text" value="'.$num_of_rooms.'" hidden>
                        <input name="adults" type="text" value="'.$adults.'" hidden>
                        <input name="child" type="text" value="'.$child.'" hidden>
                        <input name="child_0_5" type="text" value="'.$child_0_5.'" hidden>
                        <input name="child_6_12" type="text" value="'.$child_6_12.'" hidden>';

                  if(isset($_GET['submit'])){
                     if(!empty($_GET['room_list'])) {
                        foreach($_GET['room_list'] as $selected) {
                           echo '<input name="room_list[]" type="text" value="'.$selected.'" hidden>';
                        }
                     }
                  }
                  

                  echo $html = '
                        <div class="gi_input_sect">
                           <div class="row">
                              <div class="col-xs-12 col-sm-6">
                                 <div class="form_block">
                                    <p>
                                       <strong>Title</strong>
                                    </p>
                                    <input name="title" type="text" class="form-control"></div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                 <div class="form_block">
                                    <p>
                                       <strong>First name</strong>
                                    </p>
                                    <input name="f_name" type="text" class="form-control"></div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                 <div class="form_block">
                                    <p>
                                       <strong>Last name</strong>
                                    </p>
                                    <input name="l_name" type="text" class="form-control"></div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                 <div class="form_block">
                                    <p>
                                       <strong>Adress</strong>
                                    </p>
                                    <input name="addr" type="text" class="form-control"></div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                 <div class="form_block">
                                    <p>
                                       <strong>City</strong>
                                    </p>
                                    <input name="city" type="text" class="form-control"></div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                 <div class="form_block">
                                    <p>
                                       <strong>State/Province</strong>
                                    </p>
                                    <select name="state" class="form-control">
                                       <option value="0" selected disabled>State/Province</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                 <div class="form_block">
                                    <p>
                                       <strong>Zip/Postal Code</strong>
                                    </p>
                                    <input name="zip" type="text" class="form-control"></div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                 <div class="form_block">
                                    <p>
                                       <strong>Primary Telephone</strong>
                                    </p>
                                    <input name="telephone" type="text" class="form-control"></div>
                              </div>
                           </div>
                        </div>
                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis nihil quaerat nulla et esse inventore architecto officia delectus necessitatibus vel!
                        </p>
                        <div class="gi_input_sect">
                           <div class="row">
                              <div class="col-xs-12 col-sm-6">
                                 <div class="form_block">
                                    <p>
                                       <strong>Email</strong>
                                    </p>
                                    <input name="email" type="text" class="form-control"></div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                 <div class="form_block">
                                    <p>
                                       <strong>Retype Email</strong>
                                    </p>
                                    <input name="ret_email" type="text" class="form-control"></div>
                              </div>
                           </div>
                        </div>
                        <h3>Credit Card Information</h3>
                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima cum, quibusdam accusantium ullam beatae rerum ad vero unde harum labore.
                        </p>
                        <div class="gi_input_sect">
                           <div class="row">
                              <div class="col-sx-12 col-sm-6">
                                 <div class="form_block">
                                    <p>
                                       <strong>Credit card</strong>
                                    </p>
                                    <select name="credit_card" id="" class="form-control">
                                       <option value="visa">VISA</option>
                                       <option value="m_card">MASTER CARD</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sx-12 col-sm-6">
                                 <div class="form_block">
                                    <p>
                                       <strong>Number</strong>
                                    </p>
                                    <input name="cc_num" type="text" class="form-control"></div>
                              </div>
                              <div class="col-sx-12 col-sm-6">
                                 <div class="form_block">
                                    <p>
                                       <strong>Expires</strong>
                                    </p>
                                    <select name="exp_mon" id="exp_mon" class="form-control">
                                       <option value="0" selected="" disabled="">--</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option value="10">10</option>
                                       <option value="11">11</option>
                                       <option value="12">12</option>
                                    </select>
                                    <select name="exp_year" id="exp_year" class="form-control">
                                       <option value="0" selected="" disabled="">--</option>
                                       <option value="2015">2015</option>
                                       <option value="2016">2016</option>
                                       <option value="2017">2017</option>
                                       <option value="2018">2018</option>
                                       <option value="2019">2019</option>
                                       <option value="2020">2020</option>
                                       <option value="2021">2021</option>
                                       <option value="2022">2022</option>
                                       <option value="2023">2023</option>
                                       <option value="2024">2024</option>
                                       <option value="2025">2025</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="btn_block">
                           <a href="reservation-sr.php" class="form_b_btn">Back</a>
                           <button name="submit" type="submit" class="form_btn">Continue</button>
                        </div>
                     </form>';

               ?>

         </div>
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