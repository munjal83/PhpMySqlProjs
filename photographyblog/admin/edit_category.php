 <?php include 'includes/header.php'; ?>
 <?php 
	
	$id = $_GET['id'];
	
	$db = new Database();
	
	
	
	//Create SELECT query from posts
	
	$query = "SELECT * FROM  categories WHERE id = ".$id;
	
	//Run Query
	
	$category = $db->select($query)->fetch_assoc();
	
	//Create SELECT from categories
	$query = "SELECT * FROM `categories`";
	
	//Run Query
	
	$categories = $db->select($query);
	
	
	
?>

<?php 
	
	
	
	$db = new Database();
	
	if(isset($_POST['submit'])){
	
		$name = mysqli_real_escape_string($db->link, $_POST['name']);
		
	
		//Validation
		
		if($name == ''){
			
			//set error
			$error = "Please fill out all required fields";
		
		}else{
			
			$query = "UPDATE categories
						SET
						name =   '$name'
						WHERE id =".$id;
						
			$update_row = $db->update($query);			
		
		}
	}
?>

<?php 

		if(isset($_POST['delete'])){
		
			$query = "DELETE FROM categories WHERE id=".$id;
			
			$delete_row = $db->delete($query);	
		
		}
?>		
<form role="form"  method="post" action="edit_category.php?id=<?php echo $id;?>">
  <div class="form-group">
    <label for="exampleInputPassword1">Category Name</label>
    <input name="name"type="text" class="form-control" placeholder="Enter Category" value="<?php echo $category['name'];?>">
  </div>
  <div>
  <input name="submit" type="submit" class="btn btn-success" value="Add Category"/>
	<a href="index.php" class="btn btn-warning">Cancel</a>
	 <input name="delete" type="submit" class="btn btn-danger" value="Delete Category"/>
  </div>
  <br/>
</form>

<?php include 'includes/footer.php'; ?>