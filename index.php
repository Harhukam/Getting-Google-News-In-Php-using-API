<?php 

$url = "https://newsapi.org/v2/top-headlines?sources=cnn&apiKey=9e687cf4374d4e889f89cc7575b72397";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
curl_close($ch);

?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Title</title>
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<body>
<?php 
$result = json_decode($response);



foreach ($result->articles as $row ) 
{
?>

<h2><?php echo $row->title; ?> </h2>
<img  src="<?php echo $row->urlToImage; ?>"> 
<p><?php echo $row->description; ?> </p>
<a href="<?php echo $row->url; ?>">read more...</a>
<?php
}

?>
</body>
</html>