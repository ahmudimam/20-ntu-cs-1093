<?php 
if(!empty($_GET["email"]) && !empty($_GET["password"]))
{
    echo("Your email address is:");
    echo $_GET["email"]; 
}
else{
 echo "empty email or password";
}
echo "<br>";
echo("Your selected radio is:");
echo $_GET["gridRadios"];
echo "<br>";
echo("checkbox status:");
if(isset($_GET["checkbox"])){
echo"true";
}
else{
echo"false";
}
echo "<br>";


$numbers = array(4, 6, 2, 22, 11);
$ASCorDES="";
function sortArray($numbers,$ASCorDES)
{
    if($ASCorDES=="ASC" || $ASCorDES=="" ){
        sort($numbers);
    }
    else{
        rsort($numbers);
    }
    $arrlength = count($numbers);
    for($x = 0; $x < $arrlength; $x++) {
      echo $numbers[$x];
      echo "<br>";
    }
}
sortArray($numbers,$ASCorDES);


if($_GET["gridRadios"]=="option1" ){
    $random_number_array = range(0,100);
    shuffle($random_number_array );

    sortArray($random_number_array,$ASCorDES);
}

if($_GET["gridRadios"]=="option2" ){
    $keys = array('something', 'anotherThing', 'foo', 'bar', 'baz');
    $result = array();
    foreach($keys as $key) {
        $result[$key] = mt_rand(0,9);
    }
    print_r($result);   
    shuffle($result );
    print_r($result);
}

?>
