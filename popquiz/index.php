<?php include 'database.php'?>

<?php 
	
	//GET Total Questions
	
	$query = "SELECT * FROM `questions`";
	
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	
	$total = $results->num_rows;

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
		
		background-image : url("background.jpg");
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
		padding: 0;
	
	}
	a.start{
		
		text-decoration: none;
		display: inline-block;
		color: white;
		background: #8CC12B;
		border: dotted 1px #88B313;
		padding: 8px 13px;
		border-radius: 5px;
	
	}

</style>



    
</head>

<body>

	<div class="container">
		
		<div class="row">
		
			<div class="col-md-6 col-md-offset-3 box">
				
					<h1 class="black">Quiz Master</h1>
					<p class="lead black">Test your Skills by taking the quiz below</p>
					
					
					<p class="lead black"><span class="label label-primary"><strong>Total Questions: <strong><?php echo $total?></span></p>
					<p class="lead black"><span class="label label-default"><strong>Time: </strong><?php echo $total*0.5?> min(s)</span></p>
					
					
					<form class="form-group">
					
						
						<a href="question.php?n=1" class="start">Take Quiz</a> 
					
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
