<?php
    /*
    function writeMessage () {
        echo "I am writing a messsage ";
    }
    writeMessage();
    */
    /*
    function addFunction ($num1, $num2) {
        $sum = $num1 + $num2;
        echo "Sum of the numbers = $sum";
    }
    addFunction(5,5);
    */
    /*
    function addFunction ($num1, $num2) {
        $sum = $num1 + $num2;
        return $sum;
    }
    $return_value = addFunction(5,6);

    echo "returned value of this function is : $return_value ";
    */
    /*
    function printMe($walaa=3){
        print $walaa;
    }
        printMe();
        echo "<br>";
        printMe(6);
    */
    /*
    function add ($fac= 'commerce'){
        return $fac;
    }
    $result= add('sci');
    echo "$result";
    */
    /*
    function pMe ($param1=2,$param2 =3){
        $sum = $param1 + $param2 ;
        return $sum;
    }
    $resultOfpMe =pMe(0,2);
    echo "<br>Result= $resultOfpMe";
    */
    /*
    $string1="Hello";
    $string2="CMS";
    echo "<pre>";
    echo $string1 ."        ". $string2;
    echo "</pre>";
    */
    /*
    echo strlen ("<br>******************<br>");
    echo"<br>";
    echo strpos ("Walaa Elsayed","Elsayed");
    echo"<br>";
    echo str_word_count ("Hello World!");
    echo"<br>";
    echo str_replace("World", "Welo", "Hello World !");
    */
    //2 types of writing Arrays:
    /*
    $numbers = array (1,2,3,4,5);
    $numbers[0]="It's 'One' in the array";
    $numbers[1]="Two";
    $numbers[2]="Three";
    $numbers[3]="Four";
    $numbers[4]="Five";

        foreach($numbers as $values){
        echo "Value is $values <br>";
    }
    */
    /*
    $numbers = [1,2,3,4,5];
    $arrayLength = count($numbers);
    echo "Numbers of array parameters : '.$arrayLength.'";
    echo"<br> <br>";
    foreach($numbers as $values){
        echo "Value is $values <br>";
    }
    */

    //indexes starts with zero in arrays
    // what is inexes? it's the position number in the square brackets:
    // $numbers [0]=1

    /*
    //Associative arrays:
    $grades= array("Sara" => 31, "John" => 41, "Walaa" =>39, "Ramy" => 40);
    asort($grades);
    foreach ($grades as $ascKeys => $ascValues)
    {
         echo "key is  " . $ascKeys . ",Grade is " . $ascValues ;
         echo "<br> <br>";
    };
    */
    // echo "Grade of Sara is " . $grades['Sara'] . "<br>";
    // echo "Grade of John is " . $grades['John'] . "<br>";
    // echo "Grade of Walaa is " . $grades['Walaa'] . "<br>";
    // echo "Grade of Ramy is " . $grades['Ramy'] . "<br>";

















?>