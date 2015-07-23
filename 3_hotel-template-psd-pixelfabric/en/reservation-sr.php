<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel PARADISE Reservation - Select Room</title>

    <!-- Bootstrap -->
    <link href="../css/fonts.css" rel="stylesheet">
    <link href="../css/jquery-ui.css" rel="stylesheet">
<!--     <link href="../css/jquery-ui.structure.css" rel="stylesheet">
    <link href="../css/jquery-ui.theme.css" rel="stylesheet"> -->
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
                        <li><a href="../index.html">Hotel</a></li>
                        <li><a href="rooms&suites.html">Rooms & Suits</a></li>
                        <li><a href="reservation.php" class="active disabled">Reservation</a></li>
                        <li><a href="overview.html">About</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">En <span class="caret"></span></a>
                            <ul class="dropdown-menu lang" role="menu">
                                <li><a href="#">En</a></li>
                                <li><a href="#">Ru</a></li>
                                <li><a href="#">Ua</a></li>
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
    	<!--		end header-->

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
				
				<?php

					$ch_in_date = $_GET['ch_in_date'];
					$ch_out_date = $_GET['ch_out_date'];
					$num_of_rooms = $_GET['num_of_rooms'];
					$adults = $_GET['adults'];
					$child_0_5 = $_GET['child_0_5'];
					$child_6_12 = $_GET['child_6_12'];
					if (isset($_GET['child'])) {
						$child = $_GET['child'];
					} else {
						$child = $child_0_5 + $child_6_12;
					}

					echo $html =
						'<form name="" method="GET" action="reservation-gi.php">
							<div class="col-xs-12 col-sm-4 col-md-3 pull-right side_form">
								<h4><strong>Edit Your Search</strong></h4>
								<div class="row">
									<div class="col-xs-12 ch_date">
										<p><strong>Check-in</strong></p>
										<input name="ch_in_date" type="text" class="form-control datepicker" placeholder="From" value="'.$ch_in_date.'">
									</div>
									<div class="col-xs-12 ch_date">
										<p><strong>Check-out</strong></p>
										<input name="ch_out_date" type="text" class="form-control datepicker" placeholder="To" value="'.$ch_out_date.'">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-4">
										<p><strong>Room(s)</strong></p>
										<select name="num_of_rooms" id="" class="form-control">
											<option value="'.$num_of_rooms.'" selected>'.$num_of_rooms.'</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
									</div>
									<div class="col-xs-4">
										<p><strong>Adults</strong></p>
										<select name="adults" id="" class="form-control">
											<option value="'.$adults.'" selected>'.$adults.'</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
									</div>
									<div class="col-xs-4">
										<p><strong>Children.</strong></p>
										<select name="child" id="" class="form-control">
											<option value="'.$child.'" selected>'.$child.'</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
										</select>
									</div>
								</div>
								<input name="child_0_5" type="text" value="'.$child_0_5.'" hidden="hidden">
								<input name="child_6_12" type="text" value="'.$child_6_12.'" hidden="hidden">
								<input name="submit" type="submit" class="form_btn center-block" value="Update">
							</div>
							
							<div class="col-xs-12 col-sm-7 col-md-8 sr_form">
								<div class="overview b_info">
									<h3>Select Room</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde itaque quos magni sunt, minima incidunt corporis illum qui quibusdam dicta vitae ea tempore vero, maiores, hic facere aspernatur voluptates voluptatibus.</p>
								</div>
								<div class="thumbnail sr_thumbnail">
									<a href="#"><img src="../images/double-room.jpg" alt=""></a>
									<div class="caption">
										<p><strong>Classic room, non-smoking: King Bed</strong></p>
										<ul>
											<li>323-452 sq ft / 30-42 m2</li>
											<li>Free access to spa facilities</li>
											<li>Comfortable work area</li>
											<li>Sweet Sleep Bed</li>
											<li>Separate bath and shower</li>
										</ul>
										<p>
											<label for=""><strong>&euro; 115.00</strong></label>
											<span  class="chb_btn">
												<input name="room_list[]" type="checkbox" value="115">
											</span>
										</p>
									</div>
								</div>
								<div class="thumbnail sr_thumbnail">
									<a href="#"><img src="../images/single-room.jpg" alt=""></a>
									<div class="caption">
										<p><strong>Classic room, non-smoking: King Bed</strong></p>
										<ul>
											<li>323-452 sq ft / 30-42 m2</li>
											<li>Free access to spa facilities</li>
											<li>Comfortable work area</li>
											<li>Sweet Sleep Bed</li>
											<li>Separate bath and shower</li>
										</ul>
										<p>
											<label for=""><strong>&euro; 120.00</strong></label>
											<span  class="chb_btn">
												<input name="room_list[]" type="checkbox" value="120">
											</span>
										</p>
									</div>
								</div>
								<div class="thumbnail sr_thumbnail">
									<a href="#"><img src="../images/suite-room.jpg" alt=""></a>
									<div class="caption">
										<p><strong>Classic room, non-smoking: King Bed</strong></p>
										<ul>
											<li>323-452 sq ft / 30-42 m2</li>
											<li>Free access to spa facilities</li>
											<li>Comfortable work area</li>
											<li>Sweet Sleep Bed</li>
											<li>Separate bath and shower</li>
										</ul>
										<p>
											<label for=""><strong>&euro; 130.00</strong></label>
											<span  class="chb_btn">
												<input name="room_list[]" type="checkbox" value="130">
											</span>
										</p>
									</div>
								</div>
								<div class="thumbnail sr_thumbnail">
									<a href="#"><img src="../images/double-room.jpg" alt=""></a>
									<div class="caption">
										<p><strong>Classic room, non-smoking: King Bed</strong></p>
										<ul>
											<li>323-452 sq ft / 30-42 m2</li>
											<li>Free access to spa facilities</li>
											<li>Comfortable work area</li>
											<li>Sweet Sleep Bed</li>
											<li>Separate bath and shower</li>
										</ul>
										<p>
											<label for=""><strong>&euro; 118.00</strong></label>
											<span  class="chb_btn">
												<input name="room_list[]" type="checkbox" value="118">
											</span>
										</p>
									</div>
								</div>
								<button name="submit" type="button" class="lm_btn">Load more Results</button>
							</div>
						</form>'

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