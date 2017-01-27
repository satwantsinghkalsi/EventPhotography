<?php
$cust_id = $_GET['custID'];

$i=0;
$j=0;
$images_per_row = 5;
$images_dir = "customer_fav_photos\\".trim($cust_id)."\\";
/** generate photo gallery **/
$image_files = get_files($images_dir);
//echo count($image_files);
if(count($image_files)) {
	echo "<form>";
	echo "<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered table-hover' id='example'>";

	$index = 0;
	foreach($image_files as $index=>$file) {
		$thumbnail_image = $images_dir.$file;
		if(($index>0)&&($index % $images_per_row == 0)) { echo "\n</tr>"; }
		if($index % $images_per_row == 0) { echo "\n<tr>"; }
		if($index % $images_per_row == ($images_per_row-1)) {
			echo "\n<td align='center'>
				<img class='thumbnail thumbnail_right' src='$thumbnail_image' alt='$file' />
			</td>";
		} else {
				echo "\n<td align='center'>
				<img class='thumbnail thumbnail_other' src='$thumbnail_image' alt='$file' />
			</td>";
		}
		$index++;
	}
	echo "\n</tr>";
	echo "</table>";
	echo "</form>";
} else {
	echo "<p><b>There are no images available in the gallery...</b></p>";
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