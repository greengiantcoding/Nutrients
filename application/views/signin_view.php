<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>The Nutrient Guru</title>
	<script src="/assets/js/JQueryLib.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/signin_view.css">
</head>
<body>
	
<div id="container-fluid" class="background">

	<div class="row"><!--signUp Form-->
		<div class="col-12">
			<h3 id="signInTitle">Sign In Here</h3>
		</div>
		<div class="col-md-4 col-md-offset-4 col-xs-4 col-xs-offset-4">
			<form method='POST' action='/signIn/user' id="formBG">
				<label>User Name:</label>
				<input type="text" name="username">
				<label>Password:</label>
				<input type="password" name="password">
				<input type="submit" id="formBtn">
			</form>
		</div>
	</div><!--signupForm-->

	<div class="row">

	</div>


</div><!--container-->