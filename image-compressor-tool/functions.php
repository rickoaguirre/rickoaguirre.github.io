<?php
	// general settings
	ini_set('max_execution_time', 99999);
	$php_self    = htmlentities($_SERVER['PHP_SELF']);
	$url         = $_SERVER['REQUEST_URI'];

	// ----- image compressor function -----
	$photos='';
	
	// variables
	$rbtnQuality='';
	$btnStart='';
	$fail='';
	$fail_ERROR='';
	$success='';
	
	if(isset($_FILES['photos']['name']))	
	{
		$photos = $_FILES['photos']['name'];
	}
	if(isset($_FILES['photos']['tmp_name']))	
	{
		$TMPphotos = $_FILES['photos']['tmp_name'];
	}
	if(isset($_FILES['photos']['size']))	
	{
		$SIZEphotos = $_FILES['photos']['size'];
	}
	if(isset($_FILES['photos']['error']))	
	{
		$ERRORphotos = $_FILES['photos']['error'];
	}
	if(isset($_POST['chk_photos']))	
	{
		$chk_photos = $_POST['chk_photos'];
	}
	if(isset($_POST['rbtnQuality']))	
	{
		$rbtnQuality = $_POST['rbtnQuality'];
	}
	if(isset($_POST['btnStart']))	
	{
		$btnStart = $_POST['btnStart'];
	}
	
	// functions
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if($btnStart)
		{
			// form validations
			if(count(array_filter($photos,'strlen'))==0)
			{
				$fail = 'No photos are selected.';
			}			
			else if($rbtnQuality=="")
			{
				$fail = 'Please select a quality.';
			}
			// successful
			else
			{
				$validFormat = 0;
				$invalidFormat = 0;
				$file_size_ERROR = 0;
				
				foreach($_FILES['photos']['name'] as $i => $photos) {
					$photos = $_FILES['photos']['name'][$i];
					$TMPphotos = $_FILES['photos']['tmp_name'][$i];
					$ERRORphotos = $_FILES['photos']['error'][$i];
				
					// check if file is an image/photo
					$chk_ext = explode(".",$photos);
					$chk_ext = strtolower(end($chk_ext));
					
					// check if fiie size is too large
					if($ERRORphotos===UPLOAD_ERR_INI_SIZE||$ERRORphotos===UPLOAD_ERR_FORM_SIZE)
					{
						$file_size_ERROR++;
						$fail_ERROR = '['.$file_size_ERROR.'] photo/s failed to upload due to its file size.';
					}
					// valid format (successful)
					else if($chk_ext == "jpg" || $chk_ext == "jpeg" || $chk_ext == "png")
					{
						
						// image compression algorithm (IC = image compression)
						// checking image extension					
						if($chk_ext=='jpg' || $chk_ext=='jpeg') {	 
							$ICsrc =imagecreatefromjpeg($TMPphotos); //jpg / jpeg
						}					
						else {
							$ICsrc =imagecreatefrompng($TMPphotos); //png
						}

						// quality rule
						if($rbtnQuality == 'zstandard') {
							$quality = 80;
							$quality_message = 'Zstandard';
						}
						else if($rbtnQuality == 'smallest_file') {
							$quality = 50;
							$quality_message = 'Smallest file';
						}
						else {
							$quality = $rbtnQuality;
							$quality_message = $rbtnQuality.'% Quality';
						}

						// dimensions rule
						if($rbtnQuality == 'zstandard' || $rbtnQuality == 'smallest_file') {
							$dimensions = .25;
						}
						else {
							$dimensions = 1;
						}
						
						// image compression process
						list($width_min,$height_min) = getimagesize($TMPphotos); // fetching original image width and height 
						$newwidth_min 				 = $width_min * $dimensions; // set compressing image width 
						$newheight_min 				 = ($height_min / $width_min) * $newwidth_min; // equation for compressed image height
						$tmp_min 					 = imagecreatetruecolor($newwidth_min, $newheight_min); // create frame  for compress image
						imagecopyresampled($tmp_min, $ICsrc, 0,0,0,0,$newwidth_min, $newheight_min, $width_min, $height_min); // compressing image
						
						// to store the compressed image
						// in storage
						imagejpeg($tmp_min,"compressed-images/".basename($photos),$quality);
									
						$validFormat++;
						$success = '['.$validFormat.'] photo/s successfully compressed! ('.$quality_message.')';
					}
					//invalid format
					else
					{
						$invalidFormat++;
						$fail = '['.$invalidFormat.'] file/s failed to upload due to its file format. (Valid formats: JPG/JPEG/PNG)';
					}
				}
			}
		}
	}
	// END ----- image compressor function -----
?>