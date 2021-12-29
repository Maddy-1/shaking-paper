<?php

function clean($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function IsChecked($chkname,$value){
  if(!empty($_POST[$chkname]))
    {
      foreach($_POST[$chkname] as $chkval)
        {
          if($chkval == $value)
            {
              return true;
            }
        }
    }
  return false;
};
    
if (isset($_POST['submit'])) {
  $start_point = clean($_POST['start_point']);
  $date = clean($_POST['date']);
	$lat = clean($_POST['latitude']);
	$long = clean($_POST['longitude']);
	$main_text = clean($_POST['main_text']);
  $image = clean($_POST['image']);
	$sun = IsChecked('weather','sun') ? 1 : 0;
	$rain = IsChecked('weather','rain') ? 1 : 0;
	$wind = IsChecked('weather','wind') ? 1 : 0;
	$cloud = IsChecked('weather','cloud') ? 1 : 0;
	$snow = IsChecked('weather','snow') ? 1 : 0;
  $lightning = IsChecked('weather','lightning') ? 1 : 0;
  $hail = IsChecked('weather','hail') ? 1 : 0;


};



?>