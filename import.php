<?php  
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php
require_once 'config.php';


$mysqli = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if (!$mysqli->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
    exit();
}

$sql = "SELECT * FROM " . DB_PREFIX . "language WHERE status = 1";
$query = $mysqli->query($sql);
while($result = $query->fetch_array(MYSQLI_ASSOC)) {
	$languages[] = $result['language_id'];
}

// exit();


require('spreadsheet-reader-master/php-excel-reader/excel_reader2.php');
require('spreadsheet-reader-master/SpreadsheetReader.php');
$pathFile = 'import4.xlsx';
exit();
$Reader = new SpreadsheetReader($pathFile);
foreach ($Reader as $row => $data)
{
	if ($row > 1) {

		for ($i=0; $i < count($data); $i++) {
			$data[$i] = trim(addslashes($data[$i]));
		}

		$name        = (isset($data[0])&&!empty($data[0])) ? $data[0] : '';
		$nameEN      = (isset($data[1])&&!empty($data[1])) ? $data[1] : '';
		$size        = (isset($data[2])&&!empty($data[2])) ? $data[2] : '';
		$relates     = (isset($data[3])&&!empty($data[3])) ? $data[3] : '';
		$price       = (isset($data[4])&&!empty($data[4])) ? $data[4] : '';
		$discount    = (isset($data[5])&&!empty($data[5])) ? $data[5] : '';
		$detail      = (isset($data[6])&&!empty($data[6])) ? $data[6] : '';
		$detailEN    = (isset($data[7])&&!empty($data[7])) ? $data[7] : '';
		$model       = (isset($data[8])&&!empty($data[8])) ? $data[8] : '';
		$sku         = (isset($data[9])&&!empty($data[9])) ? $data[9] : '';
		$qty         = (isset($data[10])&&!empty($data[10])) ? $data[10] : '';
		$qtysize     = (isset($data[11])&&!empty($data[11])) ? $data[11] : '';
		$metatitle   = (isset($data[12])&&!empty($data[12])) ? $data[12] : '';
		$metakeyword = (isset($data[13])&&!empty($data[13])) ? $data[13] : '';
		$brand       = (isset($data[14])&&!empty($data[14])) ? $data[14] : '';
		$catmain     = strtolower($brand);
		$category1   = (isset($data[15])&&!empty($data[15])) ? $data[15] : '';
		$category2   = (isset($data[16])&&!empty($data[16])) ? $data[16] : '';
		$category3   = (isset($data[17])&&!empty($data[17])) ? $data[17] : '';
		$image       = (isset($data[18])&&!empty($data[18])) ? $data[18] : '';
		$thumb       = array();
		$thumb[]     = (isset($data[19])&&!empty($data[19])) ? $data[19] : '';
		$thumb[]     = (isset($data[20])&&!empty($data[20])) ? $data[20] : '';
		$thumb[]     = (isset($data[21])&&!empty($data[21])) ? $data[21] : '';
		$thumb[]     = (isset($data[22])&&!empty($data[22])) ? $data[22] : '';
		$thumb[]     = (isset($data[23])&&!empty($data[23])) ? $data[23] : '';
		$weight      = (isset($data[24])&&!empty($data[24])) ? $data[24] : '';
		$download    = (isset($data[25])&&!empty($data[25])) ? $data[25] : '';

		// set
		if (!empty($name)) {
			// Brand
			$sql = "SELECT * FROM " . DB_PREFIX . "manufacturer WHERE name LIKE '%" . strtolower($brand) . "%'";
			$query = $mysqli->query($sql);
			if ($query->num_rows == 0) {
				// $mysqli->close();

				$sql = "INSERT INTO " . DB_PREFIX . "manufacturer SET name = '" . strtolower($brand) . "', image = '', sort_order = '0'";
				$query = $mysqli->query($sql);
				$manufacturer_id = $mysqli->insert_id;

				$sql = "INSERT INTO " . DB_PREFIX . "manufacturer_to_store SET manufacturer_id = '" . (int)$manufacturer_id . "', store_id = '0'";
				$query = $mysqli->query($sql);
			} else {
				$result = $query->fetch_array(MYSQLI_ASSOC);
				$manufacturer_id = $result['manufacturer_id'];

				// $mysqli->close();
			}
			// Brand

			// Main Product
			$sql = "INSERT INTO " . DB_PREFIX . "product SET model = '" . $model . "', sku = '" . $sku . "', upc = '', ean = '', jan = '', isbn = '', mpn = '', location = '', quantity = '" . (int)$qty . "', stock_status_id = '5', image = 'catalog/import/" . $image . ".jpg', manufacturer_id = '" . (int)$manufacturer_id . "', shipping = '1', points = '0', price = '" . (double)$price . "', tax_class_id = '0', date_available = NOW(), weight = '" . (double)$weight . "', weight_class_id = '1', length = '20', width = '32', height = '12.5', length_class_id = '1', subtract = '1', minimum = '1', sort_order = '0', status = '1', viewed = '0', date_added = NOW(), date_modified = NOW(), ref_product_id = '', code = ''";
			$query = $mysqli->query($sql);
			$product_id = $mysqli->insert_id;
			// $mysqli->close();
			// Main Product

			// Description
			foreach ($languages as $language) {
				if ($language == 1) {
					$n = $nameEN;
					$d = $detailEN;
				} else {
					$n = $name;
					$d = $detail;
				}

				$sql = "INSERT INTO " . DB_PREFIX . "product_description SET product_id = '" . (int)$product_id . "', language_id = '" . (int)$language . "', name = '" . $n . "', description = '" . $d . "', tag = '', meta_title = '" . $metatitle . "', meta_description = '', meta_keyword = '" . $metakeyword . "'";
				$query = $mysqli->query($sql);
				// $mysqli->close();
			}
			// Description

			// Other Image
			foreach ($thumb as $img) {
				$sql = "INSERT INTO " . DB_PREFIX . "product_image set product_id = '" . (int)$product_id .  "', image = 'catalog/import/" . $img . ".jpg', sort_order = '0'";
				$query = $mysqli->query($sql);
				// $mysqli->close();
			}
			// Other Image

			// Discount
			$sql = "INSERT INTO " . DB_PREFIX . "product_special SET product_id = '" . (int)$product_id . "', customer_group_id = '1', priority = '0', price = '" . (double)$discount . "', date_start = '0000-00-00', date_end = '0000-00-00'";
			$query = $mysqli->query($sql);
			// $mysqli->close();
			// Discount

			// Category
			if (!empty($catmain)) {
				$sql = "SELECT * FROM " . DB_PREFIX . "category_description cd LEFT JOIN " . DB_PREFIX . "category c ON c.category_id = cd.category_id WHERE cd.language_id = '1' AND cd.name = '" . $catmain . "' AND c.parent_id = 0";
				$query = $mysqli->query($sql);
				$category_id = 0;
				$parent_id = 0;
				if ($query->num_rows == 1) {
					$result = $query->fetch_array(MYSQLI_ASSOC);
					$category_id = $result['category_id'];
					// $mysqli->close();
				} else {
					// $mysqli->close();
					$sql = "INSERT INTO " . DB_PREFIX . "category SET image = '', parent_id = '0', top = '0', column = '1', sort_order = '0', status = '1', date_added = NOW(), date_modified = now()";
					$query = $mysqli->query($sql);
					$category_id = $mysqli->insert_id;
					// $mysqli->close();
					foreach ($languages as $language) {
						$sql = "INSERT INTO " . DB_PREFIX . "category_description SET category_id = '" . (int)$category_id . "', language_id = '" . (int)$language . "', name = '" . $catmain . "', description = '', meta_title = '" . $catmain . "', meta_description = '', meta_keyword = ''";
						$query = $mysqli->query($sql);
						// $mysqli->close();
					}
					$sql = "INSERT INTO " . DB_PREFIX . "category_path SET category_id = '" . (int)$category_id . "', path_id = '" . (int)$category_id . "', level = '0'";
					$query = $mysqli->query($sql);

					$sql = "INSERT INTO " . DB_PREFIX . "category_to_layout SET category_id = '" . (int)$category_id . "', store_id = '0', layout_id = '0'";
					$query = $mysqli->query($sql);

					$sql = "INSERT INTO " . DB_PREFIX . "category_to_store SET category_id = '" . (int)$category_id . "', store_id = '0'";
					$query = $mysqli->query($sql);
				}
				$cat1 = $category_id;
				if ($category_id > 0) {
					$sql = "INSERT INTO " . DB_PREFIX . "product_to_category SET product_id = '" . (int)$product_id . "', category_id = '" . (int)$category_id . "'";
					$query = $mysqli->query($sql);
					// $mysqli->close();
					$parent_id = $category_id;
				}
			}
			// Category

			// Category
			if (!empty($category1)) {
				$sql = "SELECT cd.*, c.parent_id as parent_id FROM " . DB_PREFIX . "category_description cd LEFT JOIN " . DB_PREFIX . "category c ON c.category_id = cd.category_id WHERE language_id = '1' AND name = '" . $category1 . "' AND c.parent_id = '" . (int)$parent_id . "'";
				$query = $mysqli->query($sql);
				$category_id = 0;
				if ($query->num_rows == 1) {
					$result = $query->fetch_array(MYSQLI_ASSOC);
					$category_id = $result['category_id'];
					$parent_id = $result['parent_id'];
					// $mysqli->close();
				} else {
					// $mysqli->close();
					$sql = "INSERT INTO " . DB_PREFIX . "category SET image = '', parent_id = '" . (int)$parent_id . "', top = '0', `column` = '1', sort_order = '0', `status` = '1', date_added = NOW(), date_modified = now()";
					$query = $mysqli->query($sql);
					$category_id = $mysqli->insert_id;
					// $mysqli->close();
					foreach ($languages as $language) {
						$sql = "INSERT INTO " . DB_PREFIX . "category_description SET category_id = '" . (int)$category_id . "', language_id = '" . (int)$language . "', name = '" . $category1 . "', description = '', meta_title = '" . $category1 . "', meta_description = '', meta_keyword = ''";
						$query = $mysqli->query($sql);
						// $mysqli->close();
					}
					$sql = "INSERT INTO " . DB_PREFIX . "category_path SET category_id = '" . (int)$category_id . "', path_id = '" . (int)$cat1 . "', level = '0'";
					$query = $mysqli->query($sql);
					$sql = "INSERT INTO " . DB_PREFIX . "category_path SET category_id = '" . (int)$category_id . "', path_id = '" . (int)$category_id . "', level = '1'";
					$query = $mysqli->query($sql);

					$sql = "INSERT INTO " . DB_PREFIX . "category_to_layout SET category_id = '" . (int)$category_id . "', store_id = '0', layout_id = '0'";
					$query = $mysqli->query($sql);

					$sql = "INSERT INTO " . DB_PREFIX . "category_to_store SET category_id = '" . (int)$category_id . "', store_id = '0'";
					$query = $mysqli->query($sql);
				}
				$cat2 = $category_id;
				if ($category_id > 0) {
					$sql = "INSERT INTO " . DB_PREFIX . "product_to_category SET product_id = '" . (int)$product_id . "', category_id = '" . (int)$category_id . "'";
					$query = $mysqli->query($sql);
					// $mysqli->close();
					$parent_id = $category_id;
				}
			}
			// Category

			// Category
			if (!empty($category2)) {
				$sql = "SELECT cd.*, c.parent_id as parent_id FROM " . DB_PREFIX . "category_description cd LEFT JOIN " . DB_PREFIX . "category c ON c.category_id = cd.category_id WHERE language_id = '1' AND name = '" . $category2 . "' AND c.parent_id = '" . (int)$parent_id . "'";
				$query = $mysqli->query($sql);
				$category_id = 0;
				if ($query->num_rows == 1) {
					$result = $query->fetch_array(MYSQLI_ASSOC);
					$category_id = $result['category_id'];
					$parent_id = $result['parent_id'];
					// $mysqli->close();
				} else {
					// $mysqli->close();
					$sql = "INSERT INTO " . DB_PREFIX . "category SET image = '', parent_id = '" . (int)$parent_id . "', top = '0', `column` = '1', sort_order = '0', `status` = '1', date_added = NOW(), date_modified = now()";
					$query = $mysqli->query($sql);
					$category_id = $mysqli->insert_id;
					// $mysqli->close();
					foreach ($languages as $language) {
						$sql = "INSERT INTO " . DB_PREFIX . "category_description SET category_id = '" . (int)$category_id . "', language_id = '" . (int)$language . "', name = '" . $category2 . "', description = '', meta_title = '" . $category2 . "', meta_description = '', meta_keyword = ''";
						$query = $mysqli->query($sql);
						// $mysqli->close();
					}

					$sql = "INSERT INTO " . DB_PREFIX . "category_path SET category_id = '" . (int)$category_id . "', path_id = '" . (int)$cat1 . "', level = '0'";
					$query = $mysqli->query($sql);
					$sql = "INSERT INTO " . DB_PREFIX . "category_path SET category_id = '" . (int)$category_id . "', path_id = '" . (int)$cat2 . "', level = '1'";
					$query = $mysqli->query($sql);
					$sql = "INSERT INTO " . DB_PREFIX . "category_path SET category_id = '" . (int)$category_id . "', path_id = '" . (int)$category_id . "', level = '2'";
					$query = $mysqli->query($sql);

					$sql = "INSERT INTO " . DB_PREFIX . "category_to_layout SET category_id = '" . (int)$category_id . "', store_id = '0', layout_id = '0'";
					$query = $mysqli->query($sql);

					$sql = "INSERT INTO " . DB_PREFIX . "category_to_store SET category_id = '" . (int)$category_id . "', store_id = '0'";
					$query = $mysqli->query($sql);
				}
				$cat3 = $category_id;
				if ($category_id > 0) {
					$sql = "INSERT INTO " . DB_PREFIX . "product_to_category SET product_id = '" . (int)$product_id . "', category_id = '" . (int)$category_id . "'";
					$query = $mysqli->query($sql);
					// $mysqli->close();
					$parent_id = $category_id;
				}
			}
			// Category

			// Category
			if (!empty($category3)) {
				$sql = "SELECT cd.*, c.parent_id as parent_id FROM " . DB_PREFIX . "category_description cd LEFT JOIN " . DB_PREFIX . "category c ON c.category_id = cd.category_id WHERE language_id = '1' AND name = '" . $category3	 . "' AND c.parent_id = '" . (int)$parent_id . "'";
				$query = $mysqli->query($sql);
				$category_id = 0;
				if ($query->num_rows == 1) {
					$result = $query->fetch_array(MYSQLI_ASSOC);
					$category_id = $result['category_id'];
					$parent_id = $result['parent_id'];
					// $mysqli->close();
				} else {
					// $mysqli->close();
					$sql = "INSERT INTO " . DB_PREFIX . "category SET image = '', parent_id = '" . (int)$parent_id . "', top = '0', `column` = '1', sort_order = '0', `status` = '1', date_added = NOW(), date_modified = now()";
					$query = $mysqli->query($sql);
					$category_id = $mysqli->insert_id;
					// $mysqli->close();
					foreach ($languages as $language) {
						$sql = "INSERT INTO " . DB_PREFIX . "category_description SET category_id = '" . (int)$category_id . "', language_id = '" . (int)$language . "', name = '" . $category3 . "', description = '', meta_title = '" . $category3 . "', meta_description = '', meta_keyword = ''";
						$query = $mysqli->query($sql);
						// $mysqli->close();
					}

					$sql = "INSERT INTO " . DB_PREFIX . "category_path SET category_id = '" . (int)$category_id . "', path_id = '" . (int)$cat1 . "', level = '0'";
					$query = $mysqli->query($sql);
					$sql = "INSERT INTO " . DB_PREFIX . "category_path SET category_id = '" . (int)$category_id . "', path_id = '" . (int)$cat2 . "', level = '1'";
					$query = $mysqli->query($sql);
					$sql = "INSERT INTO " . DB_PREFIX . "category_path SET category_id = '" . (int)$category_id . "', path_id = '" . (int)$cat3 . "', level = '2'";
					$query = $mysqli->query($sql);
					$sql = "INSERT INTO " . DB_PREFIX . "category_path SET category_id = '" . (int)$category_id . "', path_id = '" . (int)$category_id . "', level = '3'";
					$query = $mysqli->query($sql);

					$sql = "INSERT INTO " . DB_PREFIX . "category_to_layout SET category_id = '" . (int)$category_id . "', store_id = '0', layout_id = '0'";
					$query = $mysqli->query($sql);

					$sql = "INSERT INTO " . DB_PREFIX . "category_to_store SET category_id = '" . (int)$category_id . "', store_id = '0'";
					$query = $mysqli->query($sql);
				}
				$cat4 = $category_id;
				if ($category_id > 0) {
					$sql = "INSERT INTO " . DB_PREFIX . "product_to_category SET product_id = '" . (int)$product_id . "', category_id = '" . (int)$category_id . "'";
					$query = $mysqli->query($sql);
					// $mysqli->close();
					$parent_id = $category_id;
				}
			}
			// Category

			// Download
			$sql = "SELECT * FROM " . DB_PREFIX . "download WHERE mask = '" . $download . ".jpg'";
			$query = $mysqli->query($sql);
			if ($query->num_rows == 1) {
				$result = $query->fetch_array(MYSQLI_ASSOC);
				$download_id = $result['download_id'];
			} else {
				$sql = "INSERT INTO " . DB_PREFIX . "download SET filename = '" . $download . ".jpg', mask = '" . $download . ".jpg', date_added = NOW()";
				$query = $mysqli->query($sql);
				$download_id = $mysqli->insert_id;
			}
			// $mysqli->close();

			foreach ($languages as $language) {
				$sql = "INSERT INTO " . DB_PREFIX . "download_description SET download_id = '" . (int)$download_id . "', language_id = '" . (int)$language . "', name = '" . $download . "'";
				$query = $mysqli->query($sql);
				// $mysqli->close();
			}

			$sql = "INSERT INTO " . DB_PREFIX . "product_to_download SET product_id = '" . (int)$product_id . "', download_id = '" . (int)$download_id . "'";
			$query = $mysqli->query($sql);
			// Download

			// Layout
			$sql = "INSERT INTO " . DB_PREFIX . "product_to_layout SET product_id = '" . (int)$product_id . "', store_id = '0', layout_id = '0'";
			$query = $mysqli->query($sql);
			// $mysqli->close();
			// Layout 

			// Store
			$sql = "INSERT INTO " . DB_PREFIX . "product_to_store SET product_id = '" . (int)$product_id . "', store_id = '0'";
			$query = $mysqli->query($sql);
			// $mysqli->close();
			// Store

		} else {

			// Option
			$sql = "SELECT * FROM " . DB_PREFIX . "option_value_description WHERE language_id = 1 AND name = '" . $size . "'";
			$query = $mysqli->query($sql);
			if ($query->num_rows == 1) {
				$result = $query->fetch_array(MYSQLI_ASSOC);
				$option_value_id = $result['option_value_id'];
				// $mysqli->close();
			} else {
				$sql = "INSERT INTO " . DB_PREFIX . "option_value SET option_id = '13', image = '', sort_order = '0'";
				$query = $mysqli->query($sql);
				$option_value_id = $mysqli->insert_id;

				foreach ($languages as $language) {
					$sql = "INSERT INTO " . DB_PREFIX . "option_value_description SET option_value_id = '" . (int)$option_value_id . "', language_id = '" . (int)$language . "', option_id = '13', name = '" . $size . "'";
					$query = $mysqli->query($sql);
					// $mysqli->close();
				}

				// $mysqli->close();
			}
			// Option

			// Product Option
			$sql = "SELECT * FROM " . DB_PREFIX . "product_option WHERE product_id = '" . (int)$product_id . "' AND option_id = '13' AND required = '1'";
			$query = $mysqli->query($sql);
			if ($query->num_rows == 1) {
				$result = $query->fetch_array(MYSQLI_ASSOC);
				$product_option_id = $result['product_option_id'];
			} else {
				$sql = "INSERT INTO " . DB_PREFIX . "product_option SET product_id = '" . (int)$product_id . "', option_id = '13', value = '', required = '1'";
				$query = $mysqli->query($sql);
				$product_option_id = $mysqli->insert_id;
			}
			// $mysqli->close();
			// Product Option

			// Product Option Value
			$sql = "SELECT * FROM " . DB_PREFIX . "product_option_value WHERE product_option_id = '" . (int)$product_option_id . "' AND product_id = '" . (int)$product_id . "' AND option_id = '13' AND option_value_id = '" . (int)$option_value_id . "'";
			$query = $mysqli->query($sql);
			if ($query->num_rows == 0) {
				$sql = "INSERT INTO " . DB_PREFIX . "product_option_value SET product_option_id = '" . (int)$product_option_id . "', product_id = '" . (int)$product_id . "', option_id = '13', option_value_id = '" . (int)$option_value_id . "', quantity = '" . (int)$qtysize . "', subtract = '1', price = '0', price_prefix = '+', points = '0', points_prefix = '+', weight = '0', weight_prefix = '+'";
				$query = $mysqli->query($sql);
			}
			// $mysqli->close();
			// Product Option Value
		}

    }
}

?>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>