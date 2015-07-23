<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hotel PARADISE Reservation - Finish</title>

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

		<?php  

			$ch_in_date = $_GET['ch_in_date'];
			$ch_out_date = $_GET['ch_out_date'];
			$num_of_rooms = $_GET['num_of_rooms'];
			$adults = $_GET['adults'];
			$child_0_5 = $_GET['child_0_5'];
			$child_6_12 = $_GET['child_6_12'];
			$child = $_GET['child'];
			$title = $_GET['title'];
			$f_name = $_GET['f_name'];
			$l_name = $_GET['l_name'];
			$addr = $_GET['addr'];
			$city = $_GET['city'];
			$state = $_GET['state'];
			$zip = $_GET['zip'];
			$telephone = $_GET['telephone'];
			$email = $_GET['email'];
			$credit_card = $_GET['credit_card'];
			$cc_num = $_GET['cc_num'];
			$exp_mon = $_GET['exp_mon'];
			$exp_year = $_GET['exp_year'];
			

			$message_1 = 
				'ch_in_date: '.$ch_in_date.'<br>ch_out_date: '.$ch_out_date.'<br>num_of_rooms: '.$num_of_rooms.
				'<br>adults: '.$adults.'<br>child: '.$child.'<br>child 0-5: '.$child_0_5.'<br>child 6-12: '.$child_6_12;

			if(isset($_GET['submit'])){
				if(!empty($_GET['room_list'])) {
				 	$n = 1;

					foreach ($_GET['room_list'] as $selected) {
						$room = '<br>'.$n.' selected room: '.$selected;;
						$n++;
						$message_2 = $message_2.$room;
					}
				}
			}

			$message_3 = 
				'<br><br>CONTACT INFORMATION:<br>title: '.$title.'<br>f_name: '.$f_name.'<br>l_name: '.$l_name.
				'<br>addr: '.$addr.'<br>city: '.$city.'<br>state: '.$state.'<br>zip: '.$zip.
				'<br>tel: '.$telephone.'<br>email: '.$email.'<br>cred card: '.$credit_card.'<br>cc_num: '.$cc_num.
				'<br>month: '.$exp_mon.'<br>year: '.$exp_year;

			$message = $message_1.$message_2.$message_3;
			// echo $message;
			// mail($email, $title, $message);
		?>

		<div class="row">
			<div class="col-offset-2 col-xs-12">
				<div class="th_reserv">
					<p>Thank you for you reservation!</p>
				</div>
				<div class="row send_inf">
					<div class="col-xs-12 col-sm-8">
						<p>Information e-mail has been send to <strong>info@pixel-fabrik.com</strong></p>
						<p id="res_num">Reservation Number <strong>32659845</strong></p>
					</div>
					<div class="col-xs-12 col-sm-4">
						<a href="../index.html" class="form_btn">Back to Home Page</a>
					</div>
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