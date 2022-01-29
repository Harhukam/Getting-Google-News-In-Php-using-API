<?php 

if(isset($_POST['submit']))  
    {  
        $number2 = $_POST['number2'];  
        $sum =  $number1-$number2;   
        echo "The difference of $number1 and $number2 is: ".$sum;  
    }   

?>