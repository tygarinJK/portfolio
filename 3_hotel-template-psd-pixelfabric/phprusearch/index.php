<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Search</title>

		<!-- Bootstrap -->
		<link href="../css/bootstrap.css" rel="stylesheet">
		<link href="../css/fonts.css" rel="stylesheet">
		<link href="../css/jquery-ui.css" rel="stylesheet">
		<!--    <link href="css/jquery-ui.structure.css" rel="stylesheet">-->
		<!--    <link href="css/jquery-ui.theme.css" rel="stylesheet">-->
		<link href="../css/style.css" rel="stylesheet">


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
						<li><a href="../en/rooms&suites.html">Rooms & Suits</a></li>
						<li><a href="../en/reservation.php">Reservation</a></li>
						<li><a href="../en/overview.html">About</a></li>
						<li><a href="../en/contacts.php">Contacts</a></li>
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
				<p class="h_label bottom">Search result</p>
			</div>
		</div>
		<!--		end header-->
	
		<div class="container main_inner search_inner">
			<div class="row">
				<div class="col-xs-12">
					

				


<?

	/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + +
	+              Название: | PHPru_Search                          +
	+ -------------------------------------------------------------- + 
	+                Версия: | 2.7                                   +
	+             Стоимость: | бесплатный скрипт                     +
	+            Требования: | PHP4                                  +
	+             Платформа: | любая                                 +
	+                  Язык: | русский                               +
	+                 Автор: | Alex (http://www.phpru.net)           +
	+   Copyright 2003-2004: | PHPru.net™ - All Rights Reserved.     +
	+ -------------------------------------------------------------- + 
	+              Обновлен: | 25 ноября 2004                        +
	+ + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */ 

#######################################################################
?>
<TABLE BORDER=0 WIDTH=95%>
<TR><TD>
Your Search: <B>
<?
require ('sinc/func_list.php');
$CONFIG = file('sinc/sconfig.php'); // файл конфигурации

if (isset($_POST["query"]))
{
echo htmlspecialchars(trim($_POST["query"])).'</B></CENTER>';
$microtime = microtime();
$microsecs = substr($microtime, 2, 8);
$secs = substr($microtime, 11);
$start_time = "$secs.$microsecs";
$sizetotal = 0;


if (strlen(trim($_POST["query"])) < 3)
{
?>
<BR>The lenth of search expression must be more than 3 charackters.
<BR><BR>
</TD></TR>
</TABLE>
<?
	exit;
}
$searchstring = PHPruLow(trim($_POST["query"]));
$searchword = explode (" ",$searchstring); // массив строки запроса
$allwords = count($searchword); // сколько слов в запросе

##################################################################

$FILE = file('sdata/search.php');
$count = count($FILE);
PHPruSearch('..','rus');
for ($x = 0; $x < $count; $x++) // выбираем файл
{
	@list($filename,$filesize,$content,$modify) = explode('^^^',$FILE[$x],4);
	$temp = explode('%%%',$content);
	$true = $find = $full_result = $long = 0;
	$sizetotal += $filesize;
		
	foreach($temp as $key => $value) // выбираем строку
	{
		if($allwords > 1) // если более одного слова в запросе
		{
			if(preg_match_all("/".$searchstring."/i", $value, $ok, PREG_PATTERN_ORDER))
				$new = str_replace($ok[0][0],'<FONT COLOR='.trim($CONFIG[2]).'>'.trim($CONFIG[6]).$ok[0][0].'</FONT>'.trim($CONFIG[7]), $value);
			else
				$new = $value;
			if($new != $value)
			{
				$find++;
				$true = 1;
				$show[$find] = $new;
				$full_result++; 
			}
		}
		for ($all = 0; $all < $allwords; $all++) // проходим по каждому из слов в запросе
		{	
			$chekfull = explode(" ",$value);
			if(in_array($searchword[$all],$chekfull))
				$full_result++;	
			
			$long = strlen($searchword[$all]);
			if ($long > 5)
			{
			if(preg_match("/(у|ы|а|о|я|е|и|ь)$/i", $searchword[$all]))
				$long = -1;
			if(preg_match("/(и|е|о|а|ы|у)[еямюйивх]$/i", $searchword[$all]))
				$long = -2;
			$short = substr($searchword[$all],0,$long);
			if(preg_match_all("/".$short."/i", $value, $ok, PREG_PATTERN_ORDER))
				$new = str_replace(PHPruLow($ok[0][0]),'<FONT COLOR='.trim($CONFIG[2]).'>'.trim($CONFIG[6]).$ok[0][0].'</FONT>'.trim($CONFIG[7]), PHPruLow($value));
			else
				$new = $value;

				if($new != $value)
				{
					$find++;
					$true = 1;
					$show[$find] = $new;
				}
			}
			else
			{
				$short = $searchword[$all];
				if(preg_match_all("/".$short."/i", $value, $ok, PREG_PATTERN_ORDER))
					$new = str_replace(PHPruLow($ok[0][0]),'<FONT COLOR='.trim($CONFIG[2]).'>'.trim($CONFIG[6]).$ok[0][0].'</FONT>'.trim($CONFIG[7]), PHPruLow($value));
				else
					$new = $value;
				if($new != $value)
				{
					$find++;
					$true = 1;
					$show[$find] = $new;
				}
			}
		}	
	}
	if ($true !== 0)
	{
		$fulltrue = 1;
		echo '<BR><BR><B>'.$filename.'</B><BR>';//.'<I>дата последнего обновления документа - '.$modify.', размeр - '.$filesize.'Kb</I><BR> найдено '.$find.' совпадений ( точных - '.$full_result.', похожих - '.($find-$full_result).')<BR>среди них такие как:';
		
		if ($find > trim($CONFIG[1])) // ограничение количества выводимых строк
			$STROK = trim($CONFIG[1]);
		else
			$STROK = $find;
		for ($a = 1; $a < $STROK+1; $a++) // выводим совпадения построчно
		{
			echo '<LI>...'.$show[$a].'...</LI>';
		}
	}
}

if(!isset($fulltrue))
	echo '<BR>К сожалению, по Вашему запросу ничего не найдено!';

// echo '<BR><BR><CENTER>всего обработано '.$sizetotal.'Kb в '.$count.' файлах за ';
// $microtime = microtime();
// $microsecs = substr($microtime, 2, 8);
// $secs = substr($microtime, 11);
// $end_time = "$secs.$microsecs";
// $total = round(($end_time - $start_time),2);
// echo $total.' сек. <BR><BR>';
PHPruRw(); flush();
if (isset($_SERVER["REMOTE_ADDR"]))
	$IP = $_SERVER["REMOTE_ADDR"];
else
	$IP = 'нет данных';
$NEW = time().'^^'.$searchstring.'^^'.$_SERVER["HTTP_REFERER"].'^^'.$IP."\r\n";
PHPruSave($NEW,'sinc/query.php','a+');
}
else
	echo 'Запрос на поиск не поступал!<BR><BR>';
?>
<BR>
</TD></TR>
</TABLE>
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
						<a href="../en/rooms&suites.html">Rooms & Suits</a>
						<a href="../en/reservation.php">Reservation</a>
						<a href="../en/contacts.php">Contacts</a>
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