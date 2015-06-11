<?php include 'database.php'?>
<?php session_start(); ?>
<?php 
	//Set Question number
	
	$number = (int)$_GET['n'];
	
	/*
	* Get questions
	*/

	$query = "SELECT * FROM `questions` 
	 WHERE question_number = $number";
	 
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	
	$question = $result->fetch_assoc();
	
	//Get Total
		
		$query = "SELECT * FROM `questions`";
		
		$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
		
		$total = $results->num_rows;
	
	/*
	* Get questions
	*/

	$query = "SELECT * FROM `choices` 
	 WHERE question_number = $number";
	 
	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
	
	

?>
<!doctype html>
<html>
<head>
    <title>Quiz Master</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<style>
	
	body,html{
	
		width: 100%;
		height: 100%;
		text-align: center;
		
	
	}
	
	.container{
		
		background-image : url("background2.jpg");
		background-size: cover;
		background-position: center;
		height: 100%;
		width: 100%;
		padding-top: 100px;
	
	}
	button{
		
		margin-top: 20px;
		margin-bottom: 20px;
	
	}
	
	p{
		
		padding: 15px 0 15px 0;
	
	}
	
	.alert{
		
		display : none;
		
		}

	.black{
		
		color:black;
		border-bottom: 1px dotted silver;
		padding-bottom: 10px;
		
	
	}
	
	.box{
	
		border: 1px solid white;
		background: white;
		border-radius: 10px;
		opacity: 0.9;
		
	
	}
	li{
		
		list-style: none;
		padding-bottom: 10px;
		
	
	}
	a.start{
		
		text-decoration: none;
		display: inline-block;
		color: black;
		background: #8CC12B;
		border: dotted 1px #88B313;
		padding: 8px 13px;
		border-radius: 5px;
	
	}
	.current{
		
		padding: 5px 0 10px 0;
		margin: 0 auto;
	}
	
</style>



    
</head>

<body>

	<div class="container">
		
		<div class="row">
		
			<div class="col-md-6 col-md-offset-3 box">
				
					<h1 class="black">Quiz Master</h1>
					<p class="lead black current"><span class="badge"> Question <?php echo $question['question_number']?> of <?php echo $total;?></span></p>
					
					
					<p class="lead black"><?php echo $question['text']; ?></p>
					
					
				
					<form class="form-group" method="post" action="process.php">
					
						<ul>
							
							<?php while($row = $choices->fetch_assoc()) :?>
							
							<li>
								<div class="radio">
								<label>
								<input type="radio" name="choice" id="optionsRadios1" value="<?php echo $row['id']; ?>" >
								<?php echo $row['text']; ?>	
								</label>
								</div>
							</li>
							
							<?php endwhile ; ?>
							
						</ul>
						
						<input type="submit" name="submit" class="btn btn-success btn-lg"/>
						<input type="hidden" name="number" value="<?php echo $number; ?>" />
					
					</form>
					
					<p class="black"><footer>Copyright, &copy Munjal Patel</footer></p>
					
			</div>
		
		</div>
	
	
	
	</div>
	

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


</body>
</html>
