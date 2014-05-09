<?php
//define and switch between hosts
$host = isset($_GET['sch']) ? htmlentities($_GET['sch']): "";
$sch_name_short = $host;
switch ($sch_name_short) 
{
	case 'fijai-shs':{
		$school_gender = "mixed";
		$slogan = "young souls";
		$motto = "ad astra per aspera";
		$color = "#965292";
		$background_image = "url(img/".$host."_bg.jpg)";
		$logo90 = $host.'_logo90.png';
		$sch_name_long = "fijai senior high school";
		$school_mobile = "050 . 679 . 7760";
		$twitter = "https://twitter.com/fijai-shs";
		$gplus = "https://www.google.com/+fijai-shs";
		$facebook = "https://www.facebook.com/fijai-shs";
		$youtube = "https://www.youtube.com/fijai-shs";
	}break;
	case 'sekco':{
		/*school details
		*/
		$school_gender = "mixed";
		$slogan = "yensuro";
		$motto = "lux et veritas";
		$country = "ghana";
		$zip_code = "( +233 )";
		$sch_name_long = "sekondi college";
		$school_mobile = "020 . 299 . 5877";
		$school_status = "In Session";
		$school_status_date = "as @ 5 May 2014";
		/*social media info
		*/
		$twitter = "https://twitter.com/Sekcoschool";
		$google = "https://plus.google.com/114807988094759457766/";
		$facebook = "https://www.facebook.com/sekcoschool";
		$youtube = "https://www.youtube.com/sekcoschool";
		
		/*site colours and images
		*/
		$color = "#25b8ef";
		$background_image = "url(img/".$host."_bg.jpg)";
		$img_sprite_file = "url('img/".$sch_name_short."_sprite.png')";
		
		/*recent additions
		*/
		$recent_additions_thumbnail_path = "sections/left/secondary/thumbnails";
		
		
		
	}break;
	case 'knust-jhs':{
		$school_gender = "mixed";
		$slogan = "oseikrom";
		$motto = "desire determination discipline ";
		$color = "#388f5f";
		$background_image = "url(img/".$host."_bg.jpg)";
		$logo90 = $host.'_logo90.png';
		$sch_name_long = "KNUST junior high school";
		$school_mobile = "024 . 979 . 3045";
		$twitter = "https://twitter.com/knust-jhs";
		$google = "https://www.google.com/+knust-jhs";
		$facebook = "https://www.facebook.com/knust-jhs";
		$youtube = "https://www.youtube.com/knust-jhs";
	}break;
	default:{
		$school_gender = "";$slogan = "";$motto = "";$color = "";$background_image = "";
		$logo90 = "";$sch_name_long = "";$school_mobile = "";
		$twitter = "";$gplus = "";$facebook = "";$youtube = "";
		echo "<h1>Please select a school first.</h1>";
	}
}
switch ($school_gender) {
	case 'female': { 
		$assoc_plural = 'Alumnae'; 
		$assoc_singular = 'Alumna';
	}break;
	default: { 
		$assoc_plural = 'Alumni'; 
		$assoc_singular = 'Alumnus';
	}break;
}



$FONTS_ROOT = "http://localhost/sites/school/public/fonts/";
?>