<?php  
// require_once 'config.php';

// $con = mysqli_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// // Check connection
// if (mysqli_connect_errno())
// {
// 	exit("Failed to connect to MySQL: " . mysqli_connect_error());
// }
// // Change character set to utf8
// mysqli_set_charset($con,"utf8");

// $query = mysqli_query($con, "SELECT * FROM oc_product_description");

// while($row = mysqli_fetch_assoc($query)) {
// 	// $product_id = $row['product_id'];
// 	// $sql = "UPDATE oc_product SET length = '30', width = '20', height = '11' WHERE product_id = '".(int)$product_id."'";
// 	// mysqli_query($con,$sql);
// 	// echo 'update'.(mysqli_affected_rows($con)==1 ? ' success':' false').'<br>';
// 	$name = str_replace('_', ' ', $row['name']);
// 	$sql = "UPDATE oc_product_description SET name = '" . $name . "' WHERE product_id = '" . (int)$row['product_id'] . "' AND language_id = '" . (int)$row['language_id'] . "'";
// 	// mysqli_query($con, $sql);
// 	// echo mysqli_affected_rows($con);
// 	// echo '<br>';
// }


// mysqli_close($con);
?>