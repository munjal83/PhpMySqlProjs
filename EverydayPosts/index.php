<?php include 'connect.php';?>

<?php 
	
	//creating query to retrieve from database
	
	$query = "SELECT * FROM board";
	$messages = mysqli_query($connect, $query);

?>

<!doctype html>
<html>
<head>
    <title>Bulletin Board</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   
	
	
<link rel="stylesheet" type="text/css" href="css/style.css">


</head>

<body>
<div id="container">
	<header>
		<h1 id="head">Bulletin Board</h1>
	</header>

<div id="content">	
	<ul>
		<?php while($row = mysqli_fetch_assoc($messages)) : ?>
			<li class="messages"><span><?php echo $row['time'];?> - </span><strong><?php echo $row['name'];?> : </strong><?php echo $row['message'];?></li>
		<?php endwhile; ?>
	
	</ul>
</div>
<div id="input">
	
	<?php if(isset($_GET['error'])) : ?>
		
		<div class= "error"><?php echo $_GET['error']?></div>
		
	<?php endif; ?>
	
	<form class="form-group" method="post" action="process.php">
		<input  type="text" name="name" placeholder="Your name"/>
		<input  type="text" name="message" placeholder="Your message"/>
		<br/>
		<input class="post_btn" type="submit" name="submit" value="Post">	
    </form>
</div>	
</div>


</body>
</html>
