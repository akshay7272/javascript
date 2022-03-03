<?php
include "connection.php";

?>

<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
</head>
<body>
<div class="wrapper">
	 <?php


     ?>
  
<table class="table table-striped table-hover table-bordered">
                <tr class=" text-center">
                  <th>id</th>
                  <th>Name</th>
                  <th>recipe collection id</th>
                  <th>cooking method id</th>
                  <th>cooking style id</th>
                  <th>cuts id</th>
                  <th>tags</th>
                  
                </tr>

<?php  
$data ="select * from `webrecipes` ";


$result = mysqli_query($conn, $data) or die("Error: " . mysqli_error($conn));

while ($values=mysqli_fetch_assoc($result)){

  $id = $values['id'];
  $Name = $values['name'];
  $recipe_collection = $values['recipe_collection_id'];
  $cooking_method = $values['cooking_method_id'];
  $tags = $values['tags'];
  $style = $values['cooking_style_id'];
  $cut = $values['cut_type_id'];


echo "<tr>
      <td> $id</td>
       <td> $Name</td>
        <td>$recipe_collection</td>
         <td> $cooking_method</td>
         <td> $style</td>
         <td>$cut</td>
         <td> $tags</td>
         
         </tr>";  }
         ?>


    </div>
</div>

  </div>

</body>
</html>





