<?php $output = "
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 100;
  src: local('Raleway Thin'), local('Raleway-Thin'), url(http://{$host}/public/fonts/raleway/Raleway-Thin.ttf) format('ttf');
}
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 200;
  src: local('Raleway ExtraLight'), local('Raleway-ExtraLight'), url(http://{$host}/public/fonts/raleway/Raleway-ExtraLight.ttf) format('ttf');
}
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 300;
  src: local('Raleway Light'), local('Raleway-Light'), url(http://{$host}/public/fonts/raleway/Raleway-Light.ttf) format('ttf');
}
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 400;
  src: local('Raleway'), url(http://{$host}/public/fonts/raleway/Raleway.ttf) format('ttf');
}
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 500;
  src: local('Raleway Medium'), local('Raleway-Medium'), url(http://{$host}/public/fonts/raleway/Raleway-Medium.ttf) format('ttf');
}
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 600;
  src: local('Raleway SemiBold'), local('Raleway-SemiBold'), url(http://{$host}/public/fonts/raleway/Raleway-SemiBold.ttf) format('ttf');
}
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 700;
  src: local('Raleway Bold'), local('Raleway-Bold'), url(http://{$host}/public/fonts/raleway/Raleway-Bold.ttf) format('ttf');
}
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 800;
  src: local('Raleway ExtraBold'), local('Raleway-ExtraBold'), url(http://{$host}/public/fonts/raleway/Raleway-ExtraBold.ttf) format('ttf');
}
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 900;
  src: local('Raleway Heavy'), local('Raleway-Heavy'), url(http://{$host}/public/fonts/raleway/Raleway-Heavy.ttf) format('ttf');
}
		
"; 
	$this_file  = __FILE__;
	$last_font_modify_time = filemtime($this_file);
	
	if ( !isset ($modified_font) )
	{
		ob_start();
		echo $output;	
		$font_content = ob_get_contents();
		ob_end_clean();
		$cwd = getcwd();
		$font_file = $cwd."/fonts/raleway/raleway1.css";
		//@chmod($css_file,0755);
	   	$writable_file = fopen($font_file, "w");
	   	$data_size = strlen($font_content);
	   	fputs($writable_file,$font_content, $data_size);
	   	fclose($writable_file);
   	} 
   	elseif ( isset ($modified_font) && $modified_font < $last_font_modify_time ) 
   	{
   		unset($_SESSION["modified_font"]);
   	}
?>

