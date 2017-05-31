<?php 

?>

<!DOCTYPE html>

<html>

<head>

	<title>Weather Forcast App</title>

	<meta charset="utf-8" />
	<meta http-quiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<style>
		body, html {padding: 0; margin: 0; width: 100%; height: 100%;}
		.container {background-image: url("splash.jpeg"); width: 100%; height: 100%; background-size: cover; background-position: center;}
		.row {display: table; height: 100%; width: 100%;}
		#splash {width: 60%; margin: 0 auto; text-align: center; height: 100%; 
			display: table-cell; vertical-align: middle; color: #F5F3EE; }
		h1 {font-size: 4em;}
		p {padding-top: 15px; padding-bottom: 15px;}
		button {margin-top: 15px;}
		.alert {margin-top: 2em; display: none;}
	</style>

</head>

<body>

<div class="container">
	<div class="row">
		<div id="splash">
			<h1>Weather Prediction</h1>
			<p class="lead">Enter your city below to get a forecast.</p>
			<form>
				<div class="form-group">
					<input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, Tokyo...">
				</div>
				<button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>	
			</form>

			<div id="success" class="alert alert-success"></div>

			<div id="fail" class="alert alert-danger">Could not find data for that city. Please try again.</div>

			<div id="noCity" class="alert alert-danger">Please enter a city.</div>

		</div>
	</div>
</div>

<script>

	$("#findMyWeather").click(function (event) {

		event.preventDefault();

		$(".alert").hide();

		if ($("#city").val() != "") {

			$.get("scraper.php?city="+$("#city").val(), function(data){

				if (data == "") {
					
					$("#fail").fadeIn();

				} else {

					$("#success").html(data).fadeIn();

				}

			});

		} else {

			$("#noCity").fadeIn();

		}
		
	});

</script>

</body>
</html>		

