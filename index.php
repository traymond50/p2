<!DOCTYPE html>
<html>
<head>

	<title>P2</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href='css/bootstrap.min.css' type='text/css'>
	<link rel='stylesheet' href='css/style.css' type='text/css'>

	<?php require 'logic.php'; ?>

</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">
		<h1>xkcd Password Generator </h1>
	</nav>
	<form class="form-horizontal" role="form" action='index.php' method='POST'>
  		<div class="form-group">
    		<label class="col-xs-2 control-label"></label>
    		<div class="col-xs-offset-1 col-xs-10">
      			<input type="text" class="form-control" name='wordcount' placeholder="Enter number of words( Between 1 and 20)")>
    		</div>
  		</div>
  		<div class="form-group">
    		<div class="col-xs-offset-1 col-xs-10">
      			<div class="checkbox">
        			<label>
          			<input type="checkbox" name='number'>Include Number
        			</label>
      			</div>
    		</div>
  		</div>
    	<div class="form-group">
    		<div class="col-xs-offset-1 col-xs-10">
      			<div class="checkbox">
        			<label>
          			<input type="checkbox" name='specialcharacter'> Include Special Character
        			</label>
      			</div>
    		</div>
  		</div>
    	<div class="form-group">
    		<div class="col-xs-offset-1 col-xs-10">
      			<div class="checkbox">
        			<label>
          			<input type="checkbox" name='uppercase'> UPPERCASE
        			</label>
      			</div>
    		</div>
  		</div>
    	<div class="form-group">
    		<div class="col-xs-offset-1 col-xs-10">
      			<div class="checkbox">
        			<label>
          			<input type="checkbox" name='space'> Dashes Between Words
        			</label>
      			</div>
    		</div>
    	</div>
  		<div class="form-group">
    		<div class="col-xs-offset-1 col-xs-10">
      			<button type="submit" class="btn btn-default">Submit</button>
    		</div>
  		</div>
	</form>
	<div class="row">
		<div class="col-xs-3"></div>
		<div class="col-xs-6">
		<?php
			//checks to make sure user has entered a proper value
			if($_POST["wordcount"] < 1 || $_POST["wordcount"] > 20)
			{
				echo "<div class='output'>You must pick a number between 1 and 20</div>";
			}
			//generates password if user has entered a correct password
			else
			{
				for($i = 0; $i+1 < $_POST["wordcount"]; $i++)
				{
					$output = $word[rand(0,1074)];
					//uppercase option
					if ($_POST["uppercase"] == "on")
					{ 
						echo "<div class='output ".$output."'>".strtoupper($output)."</div>";
					}
					//lowercase options
					else
					{ 
						echo "<div class='output ".$output."'>".$output."</div>";
					}
					//adds dashes if reqyested
					echo "<div class='space'>".$space."</div>";
				}
				$output = $word[rand(0,1074)];
				echo "<div class='output ".$output."'>".$output."</div>";
			}
			//adds number if requested
			if($number)
			{
				echo "<div class='output ".$output."'>".$number."</div>";
			}
			//adds special character if requested
			if($specialCharacter)
			{
				echo "<div class='output ".$output."'>".$specialCharacter."</div>";
			}
		?>
		</div>
		<div class="col-xs-3"></div>
	</div>
</body>
</html>