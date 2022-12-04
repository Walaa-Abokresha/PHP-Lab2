<?php
//1-How to make \n work in browser.
    echo nl2br("First normal line \r\n This is a newline  ");
    echo "<br>";
    echo nl2br ("The \\n + nl2br \n Works TOO!");

//2-Three built-in functions of a string.
    //ucwords:
    echo "<br> <br>";
    $words = " my name is walaa abokresha";
    $capsMyWord= ucwords($words);
    echo $capsMyWord;
    //Join() or Implode():
    echo "<br> <br>";
    $join = array ('HTML', 'JavaScript', 'PHP');
    echo implode(",", $join);
    //Show html tags by using htmlspecialchars:
    echo "<br> <br>";
    $html = "I am <i>Italic</i>";
    echo $html;
    echo "<br>";
    echo htmlspecialchars($html);

//3-Display $_SERVER in readable format:
    echo"<pre>";
    PRINT_r($_SERVER);
    echo"</pre>";

//4-a- The sum and avg of an indexed array:
    $indexedArray = array (12,45,10,25);
    //Sum:
    $sum= array_sum($indexedArray);
    echo "Sum of this array is " .$sum. "<br>";


    //average: 
    $avg = array_sum($indexedArray)/count($indexedArray);
    echo "average is  ". $avg. "<br> <br>";

//4-b- Sort it with reverse order (high to low):
    // $reverseSort= rsort($indexedArray);
    // echo .$reverseSort. ;
    rsort($indexedArray);
    foreach ($indexedArray as $values){
        echo "Value is $values <br>";
    }

//5-Sort the associative array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40):
    //Ascending by value:
    $grades= array("Sara" => 31, "John" => 41, "Walaa" =>39, "Ramy" => 40);
    asort($grades);
    foreach ($grades as $ascKeys => $ascValues)
    {
         echo "key is  " . $ascKeys . ",Grade is " . $ascValues ;
         echo "<br><br>";
    }
    //Ascending by key:
    echo "<br>";
    $grades= array("Sara" => 31, "John" => 41, "Walaa" =>39, "Ramy" => 40);
    ksort($grades);
    foreach ($grades as $ascKeys => $ascValues)
    {
         echo "key is  " . $ascKeys . ",Grade is " . $ascValues ;
         echo "<br><br>";
    }
    //Descending by value:
    echo"<br>";
    $grades= array("Sara" => 31, "John" => 41, "Walaa" =>39, "Ramy" => 40);
    arsort($grades);
    foreach ($grades as $ascKeys => $ascValues)
    {
         echo "key is  " . $ascKeys . ",Grade is " . $ascValues ;
         echo "<br> <br>";
    }
    //Descending by key:
    echo "<br>";
    $grades= array("Sara" => 31, "John" => 41, "Walaa" =>39, "Ramy" => 40);
    krsort($grades);
    foreach ($grades as $ascKeys => $ascValues)
    {
         echo "key is  " . $ascKeys . ",Grade is " . $ascValues ;
         echo "<br><br>";
    }

?>