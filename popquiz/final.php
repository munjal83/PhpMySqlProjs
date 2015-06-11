<?php session_start();?>
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
					<p class="lead black">You're Done!</p>
					
					
					
					<p class=" black"><strong>Your Score: </strong> <?php echo $_SESSION['score']?></p>
					
					
					
					<?php
					// remove all session variables
						session_unset(); 

						// destroy the session 
						session_destroy(); 
					?>
						
						<a href="question.php?n=1" class="start">Take Quiz Again</a> 
					
					
					
					<p class="black"><footer>Copyright, &copy Munjal Patel</footer></p>
					
			</div>
		
		</div>
	
	
	
	</div>
	

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


</body>
</html>
