<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Hotel PARADISE Reservation - Basic Information</title>

		<!-- Bootstrap -->
		<link href="../css/bootstrap.css" rel="stylesheet">
		<link href="../css/fonts.css" rel="stylesheet">
		<link href="../css/jquery-ui.css" rel="stylesheet">
		<!--    <link href="css/jquery-ui.structure.css" rel="stylesheet">-->
		<!--    <link href="css/jquery-ui.theme.css" rel="stylesheet">-->
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
						<li><a href="reservation.php">Reservation</a></li>
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
				<div class="main_inner_header">
					<a href="reservation.php"><span>1</span>Basic Information</a>
					<a href="reservation-sr.php"><span>2</span>Select Room</a>
					<a href="reservation-gi.php"><span>3</span>Guest Information</a>
					<a href="reservation-f.php"><span>4</span>Finish</a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-offset-2 col-sm-8">
					<div class="b_info">
						<h3>Basic Information</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse facere aliquam sint quae reiciendis obcaecati voluptates quis dolorem quam illo nesciunt, fugiat maxime, officia, amet cupiditate doloribus et nisi? Rem!</p>
					</div>
					<div class="row">

						<?php

							$ch_in_date = $_GET['ch_in_date'];
							$ch_out_date = $_GET['ch_out_date'];
							$num_of_rooms = $_GET['num_of_rooms'];

							echo $html =
								'<form name="" method="GET" action="reservation-sr.php">
									<div class="input_sect">
										<div class="col-xs-12 col-sm-6">
											<div class="ch_date">
												<p><strong>Check-in</strong></p>
												<input type="text" name="ch_in_date" class="form-control datepicker" value="'.$ch_in_date.'">
											</div>
										</div>
										<div class="col-xs-12 col-sm-6">
											<div class="ch_date">
												<p><strong>Check-out</strong></p>
												<input type="text" name="ch_out_date" class="form-control datepicker" value="'.$ch_out_date.'">
											</div>
										</div>
									</div>
									<div class="col-xs-12">
										<div class="row select_sect">
											<div class="book_form">
												<p><strong>Number of rooms:</strong></p>
												<select name="num_of_rooms" id="" class="form-control">';
													
													if (isset($_GET['num_of_rooms'])) {
														echo $html =
															'<option value="'.$num_of_rooms.'" selected hidden>'.$num_of_rooms.'</option>';
													} else {
														echo $html =
															'<option value="0" disabled selected>--</option>';
													}

												echo $html =
													'<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
												</select>
											</div>
											<div class="book_form">
												<p><strong>Adults per room:</strong></p>
												<select name="adults" id="" class="form-control">
													<option value="0" disabled selected>--</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
											<div class="book_form">
												<p><strong>Children 0-5:</strong></p>
												<select name="child_0_5" id="" class="form-control">
													<option value="0" disabled selected>--</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
											<div class="book_form">
												<p><strong>Children 6-12:</strong></p>
												<select name="child_6_12" id="" class="form-control">
													<option value="0" disabled selected>--</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-xs-12">
										<button name="submit" type="submit" class="form_btn center-block">Continue</button>
									</div>
								</form>';

						?>

					</div>
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
						<a href="contacts.html">Contacts</a>
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