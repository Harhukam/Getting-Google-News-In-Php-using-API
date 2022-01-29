<?php 




 function print_news($api_response)
    {
        if($api_response == null)
        {
            echo "<p>Response is null, no action taken.</p>";
            return;
        }
        if(isset($api_response->posts))
            foreach($api_response->posts as $post)
            {
                echo "<p>" . $post->title . "</p>";
            }
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>home 2</title>
</head>
<body>

</body>
</html>