<?php
$cust_id = $_GET['c'];

$images_dir = "customer_fav_photos\\".trim($cust_id)."\\";
/** generate photo gallery **/
$image_files = get_files($images_dir);

$index = 0;
foreach($image_files as $index=>$file) {
	$thumbnail_image = $images_dir.$file;
	if($index ==0){
		echo "<div class='item active'><img class='.carousel-image' src='$thumbnail_image' alt='FavImage'></div>";
	} else {
		echo "<div class='item'><img class='.carousel-image' src='$thumbnail_image' alt='FavImage'></div>";
	}
	$index++;
}

/* function:  returns files from dir */
function get_files($images_dir) 
{
	$exts = array('jpg','jpeg','bmp','png','gif');
	$files = array();
	//echo $images_dir;
	if($handle = opendir($images_dir)) {
		while(false !== ($file = readdir($handle))) {
			$extension = strtolower(get_file_extension($file));
			if($extension && in_array($extension,$exts)) {
				$files[] = $file;
			}
		}
		closedir($handle);
	}
	return $files;
}
/* function:  returns a file's extension */
function get_file_extension($file_name)
{
	return substr(strrchr($file_name,'.'),1);
}
?>