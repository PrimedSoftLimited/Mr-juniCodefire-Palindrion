
<!DOCTYPE html>
<html>
<head>
    <title>Palindrome</title>
</head>
<body>
    <form style="width: 50%; margin: auto;" action="" method="get" >
        <input type="text" name="word">
        <input type="submit" name="submit">
    </form>

</body>
</html>





<?php

if(isset($_GET['submit'])) {
    function Palindrome_second_way($string){   

        if (empty($string)) {
            echo "please input a string";
            die();
        }else{
              if (strrev($string) == $string){   
                    return 1;    
              }else{ 
                    return 0; 
              } 
        }
      
    }   
      
        // Driver Code 
        $word = $_GET['word'];  
        if(Palindrome_second_way($word)){   
            echo "Answer: Palindrome found<br>";   
        }  
        else {   
        echo "Answer: Not a Palindrome <br>";   
        } 
        # code...
}else{
    echo "insert a string to check";
}
/*function Palindrome_first_way($number){   
    $temp = $number;   
    $new = 0;   
    while (floor($temp)) {   
        $d = $temp % 10;   
        $new = $new * 10 + $d;   
        $temp = $temp/10;   
    }   
    if ($new == $number){   
        return 1;   
    } 
    else{ 
        return 0; 
    } 
}   
  
// Driver Code 
$word = 177771;  
if (Palindrome_first_way($word)){   
    echo "Palindrome here <br>";   
}  
else {   
echo "Not a Palindrome <br>";   
} 
  */
  ////////////////////////////////////////

i
?> 

