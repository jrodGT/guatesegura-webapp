<?php
 
		define('__ROOT__', dirname(dirname(__FILE__))); 
		$base = $_REQUEST["image_guatesegura"];; 
		$path_img      = __ROOT__."/imagenes_guatesegura/";
		$path_img_tumb = __ROOT__."/imagenes_guatesegura/thumb/";
		
		if (isset($base)) {	 
			$suffix = GenerarID();
			$image_name = "img_".$suffix."_".date("d-m-Y-H-m-s").".jpg";		
			// base64 encoded utf-8 string
			$binary = base64_decode($base);	 
			// binary, utf-8 bytes	 
			header("Content-Type: bitmap; charset=utf-8");	 
			$file = fopen($path_img.$image_name, "wb");	 
			
			fwrite($file, $binary);	 
			fclose($file);	 
			
			//$d = compress($path_img.$image_name, $path_img_tumb.$image_name, 10);
			$d = imagecrop($path_img.$image_name, $path_img_tumb.$image_name,"image/jpg",100,100);
			die($image_name);	 

			return $image_name;
		} else {	 
			die("No POST");
			return "Error";
		}

	//Nombre Aleatorio ---------------------------------------------------------
	function GenerarID() {	
		$chars = "abcdefghijkmnopqrstuvwxyz0123456789?";
		$i = 0;	 
		$pass = "";	 
		while ($i <= 5) {	 
			$num = rand() % 33;	 
			$tmp = substr($chars, $num, 1);	 
			$pass = $pass . $tmp;	 
			$i++;
		}	
		return $pass;
	}
	
	function compress($source, $destination, $quality) 
	{  $info = getimagesize($source); 
	  if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source); 
	  elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source); 
	  elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source); 
	  imagejpeg($image, $destination, $quality); 
	  return $destination; 
	  }
	
function imagecrop($img_name,$newname,$type,$modwidth,$modheight)
{
 
	list($width, $height) = getimagesize($img_name) ; //get width & height in array list
 
    $tn = imagecreatetruecolor($modwidth, $modheight); 
	if(!strcmp("image/png",$type))
	{
	imagealphablending($tn, false); //For transparent BackGround
	imagesavealpha($tn, true);  
	}
 
 
 
   if(!strcmp("image/jpg",$type) || !strcmp("image/jpeg",$type) || !strcmp("image/pjpeg",$type))
        $src_img=imagecreatefromjpeg($img_name);
 
    if(!strcmp("image/png",$type))
        $src_img=imagecreatefrompng($img_name);
 
    if(!strcmp("image/gif",$type))
        $src_img=imagecreatefromgif($img_name);
 
          imagecopyresampled($tn, $src_img, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ; 
 
 
   if(!strcmp("image/png",$type))  
   {
   imagesavealpha($src_img, true);
   $ok=imagepng($tn,$newname);
   }
   else if(!strcmp("image/gif",$type))  
   {
   $ok=imagegif($tn,$newname);
   }
   else 
   {
   $ok=imagejpeg($tn,$newname);
   }
 
if($ok==1)
  {
return "ok";
  }
} 	

	
?>