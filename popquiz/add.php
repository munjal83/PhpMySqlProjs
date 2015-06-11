<?php include 'database.php'; ?>

<?php

	if(isset($_POST['submit'])){
	
		//get input from the form
		$question_number = $_POST['question_number'];
		$question_text =   $_POST['question_text'];

		//creating choices array
		$choices = array();
		$choices[1] = $_POST['choice1'];
		$choices[2] = $_POST['choice2'];
		$choices[3] = $_POST['choice3'];
		$choices[4] = $_POST['choice4'];
		$choices[5] = $_POST['choice5'];
		
		$correct_choice = $_POST['correct_choice'];
		//creating query
		
		$query = "INSERT INTO `questions` (question_number,text)
					VALUES('$question_number', '$question_text')";
		
		$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
		
		if($insert_row){
		
			foreach($choices as $choice => $value){
				
				if($value != ''){
					
					if($correct_choice == $choice){
						
						$is_correct = 1;
					
					}else{
						
						$is_correct = 0;
					
					}
					//Choice array
					
					$query = "INSERT INTO `choices` (question_number, is_correct, text)
								VALUES ('$question_number', '$is_correct', '$value')";
					
					$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
					
					if($insert_row){
						
						continue;
					
					}else{
					
						die('Error: ('.$mysqli->errorno .')'.$mysqli->error);
					}	
				
				}
			
			
			}
			
			
		}
	}
	$msg = 'Question has been added successfully';
	//Get total number of questions
	$query = "SELECT * FROM `questions`";
	 
	$questions = $mysqli->query($query) or die($mysqli->error.__LINE__);
	
	$total = $questions->num_rows;
	$next = $total+1;

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
		
		background-image : url("background.jpg");
		width: 100%;
		height: 100%;
		text-align: center;
		
	
	}
	
	.container{
		
		
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
	
	label{
		
		display: inline-block;
	
	}


</style>



    
</head>

<body>

	<div class="container">
		
		<div class="row">
		
			<div class="col-md-6 col-md-offset-3 box">
				
					<h1 class="black">Quiz Master</h1>
					<div class="alert alert-success" role="alert"><?php if(isset($msg)){echo $msg;} ?></div>
					<h3>Add a Question</h3>
					
					<form class="form-group" method="post" action="add.php">
					
					
					<p>
					<label >Question Number</label>
					<input type="number" class="form-control number" value="<?php echo $next;?>"name="question_number"/>
					</p>
						
					<p>	
					<label>Question Text</label>
					<input type="text" class="form-control" name="question_text"/>
					</p>
					
					<p>
					<label>Choice 1</label>
					<input type="text" class="form-control" name="choice1"/>
					</p>
					
					<p>
					<label>Choice 2</label>
					<input type="text" class="form-control" name="choice2"/>
					</p>
					
					<p>
					<label>Choice 3</label>
					<input type="text" class="form-control" name="choice3"/>
					</p>
					
					<p>
					<label>Choice 4</label>
					<input type="text" class="form-control" name="choice4"/>
					</p>
					
					<p>
					<label>Choice 5</label>
					<input type="text" class="form-control" name="choice5"/>
					</p>
					
					<p>
					<label>Correct Choice</label>
					<input type="number" class="form-control number" name="correct_choice"/>
					</p>				
					
					<input type="submit" name="submit" class="btn btn-success btn-lg"/>
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
