<?php include 'includes/header.php'; ?>
<?php 
	
	
	
	$db = new Database();
	
	if(isset($_POST['submit'])){
	
		$name = mysqli_real_escape_string($db->link, $_POST['name']);
		
	
		//Validation
		
		if($name == ''){
			
			//set error
			$error = "Please fill out all required fields";
		
		}else{
			
			$query = "INSERT INTO categories (name)
						VALUES ('$name')";
						
			$insert_row = $db->insert($query);			
			 
			
		}
	}

	
	//Create SELECT from categories
	$query = "SELECT * FROM `categories`";
	
	//Run Query
	
	$categories = $db->select($query);
	
	
	
?>

<form role="form"  method="post" action="add_category.php">
  <div class="form-group">
    <label>Category Name</label>
    <input name ="name" type="text" class="form-control" placeholder="Enter Category">
  </div>
  <div>
  <input name="submit" type="submit" class="btn btn-success"/>
  <a href="index.php" class="btn btn-danger">Cancel</a>
  </div>
  <br/>
</form>

<?php include 'includes/footer.php'; ?>