<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=0.75">
	
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	
	<!--- Google fonts--->

	<link href="https://fonts.googleapis.com/css?family=Lato|Raleway" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="Contacts.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<title>Contacts</title>
</head>
<body>
	
<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
	    <div class="navbar-header col-lg-4 col-md-3 col-sm-12 col-xs-12">
			<button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#nav-collapse">
				<span class="icon-bar"></span>
                <span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Pravka</a> 
		</div>

		<div class="navbar-collapse collapse col-lg-5 col-md-7 " id="nav-collapse">
			<ul class="nav nav-navbar navbar-right">
				<li ><a href="index.php">Home</a></li>
				<li ><a href="Portfolio.php">Portfolio</a></li>
				<li ><a href="Services.php">Services</a></li>
				<li ><a href="">Contacts</a></li>
				<li ><a href="" class="glyphicon glyphicon-envelope" data-toggle="modal" data-target="#modal-1"></a></li>
			</ul>      	
		</div>
	</div>	
</nav>

<div class="modal " id="modal-1" style="margin-top: 100px; ">
	<div class="modal-dialog">
		<div class="modal-content" >
			<div class="modal-header">
				<h3 class="modal-title centered">Leave us an application and we'll get in touch with you</h3>
				<button class="close" type="button" data-dismiss="modal">X</button>
			</div>
			<div class="modal-body">

				<div class="col-lg-6">
				<div  class="container ">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<form style="max-width: 500px;" name="aplication" action="" method="post">
					
					<div class="centered  form-group col-lg-9 col-md-9 col-sm-10 col-xs-10 ">
						<label for="Name1" class="col-lg-12 col-md-12 col-sm-offset-1 col-xs-offset-1">Your name</label>
						<input type="input" name="name" class="form-control col-lg-12 col-md-12 col-sm-offset-1 col-xs-offset-1" id="Name1" placeholder="Enter name" pattern="^[a-zA-Zа-яА-ЯІі][a-zA-Zа-яА-ЯІі]{1,20}$" required oninvalid="setCustomValidity('Імя має бути від 2 до 20 символів і не має містити цифр і спец. символів')" oninput="setCustomValidity('')">
					</div>
					

					 <div class="centered form-group col-lg-9 col-md-9 col-sm-10 col-xs-10">
						<label for="Email1" class="col-lg-12 col-md-12 col-sm-offset-1 col-xs-offset-1">Email address</label>
					    <input type="email" name="email" class="form-control col-lg-12 col-md-12	col-sm-offset-1 col-xs-offset-1" id="Email1"  placeholder="Enter email" pattern="^[a-zA-Zа-яА-ЯІі0-9._%-]+@[a-zA-Zа-яА-ЯІі0-9._-]+\.[a-zA-Zа-яА-ЯІі]{2,4}$" required oninvalid="setCustomValidity('E-mail має бути від 2 до 20 символів')" oninput="setCustomValidity('')">
					</div>
					

					<div class="centered form-group col-lg-9 col-md-9 col-sm-10 col-xs-10">
						<label for="Phone1" class="col-lg-12 col-md-12 col-sm-offset-1 col-xs-offset-1">Your phone number</label>
						<input type="tel" name="phone" class="form-control col-lg-12 col-md-12 col-sm-offset-1 col-xs-offset-1" id="Phone1"  placeholder="Enter phone number" pattern="^[0-9][0-9]{6,20}$" required oninvalid="setCustomValidity('Номер телефону має бути від 2 до 20 символів і не має містити букв і спец.символів')" oninput="setCustomValidity('')">
					</div>
					
					<div class="centered form-group col-lg-9 col-md-9 col-sm-10 col-xs-10">
						<label for="Form1" class="col-lg-12 col-md-12 col-sm-offset-1 col-xs-offset-1">Your order</label>
						<textarea type="textarea" name="message" class="form-control col-lg-12 col-md-12	col-sm-offset-1 col-xs-offset-1" id="Form1"  placeholder="Enter your order" pattern="^[a-zA-Zа-яА-ЯІі0-9._%-]$" required oninvalid="setCustomValidity('Введіть ваше повідомлення')" oninput="setCustomValidity('')"></textarea>
					</div>

					<button name="done" class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6 col-sm-offset-3 col-xs-offset-3 col-md-offset-3 btn btn-success centered">Submit an application</button>
				</form>
				</div>
				</div>
				</div>
		</div>
		</div>
	</div>
</div>
<div class="container centered">
	<span style="color: green;">
<?php 
$to = "zagorboda@gmail.com";
$subject = "Creating website";
if(isset($_POST['done'])) {
if(trim($_POST['name']) == '') $FormErr = true;
/*elseif (!eregi("^[A-Za-zа-яА-Я]", trim($_POST['name']))) $FormErr = true; */
else $name = htmlspecialchars($_POST['name']);
if(trim($_POST['phone']) == '') $FormErr = true;
/*elseif (!eregi("^[0-9]", trim($_POST['phone']))) $FormErr = true;*/
else $phone = htmlspecialchars($_POST['phone']);
if(trim($_POST['email']) == '' ) $FormErr = true;
/*elseif (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._-]+\.[A-Z]{2,4}$", trim($_POST['email']))) $FormErr = true;*/
else $email= htmlspecialchars($_POST['email']);
if(trim($_POST['message']) == '') $FormErr = true;
else $message = htmlspecialchars($_POST['message']);
if($FormErr == false){
	$main = "
	$name    
	$email    
	$phone    
	$message";
	mail($to , $subject , $main);
	echo('Your aplication is send');
	}
}
?></span>
	<h2>Get  consultation for your site</h2>
	<h3>(+38)0985673567</h3>
	<p>Andrew - main developer</p>
	<h3>(+38)0638936782</h3>
	<p>Liza - designer</p>
	<h3>(+38)0983807632</h3>
	<p>Alina - project manager</p>
</div>
<hr>

<div class="container centered">
	<h2>We are at the address</h2>
	Kyiv<br>
	Coworking "Platforma"	<br> 
	Belomorskaya str, 1A;  Bogdan Khmelnitsky str, 17/52
	<img class="coworcingimg col-lg-12 col-md-12 col-sm-12 col-xs-12" src="Platforma.jpg">

	<h3>For more information</h3>
	<h4>pravka_info@gmail.com</h4>
</div>

<hr><hr>

<div class="container">
	<footer  id="footer" class="footer footer-fixed-bottom">
		&copy Developed by Bohdan Zahoruiko
	</footer>
</div>