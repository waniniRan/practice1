<h1>LOOPS</h1>

<?php

//While loop
$in=0;
while($in<10){
    print $in."<br>";
    $in++;
}
?>
<h1>Do-while-loop</h1>
<?php
//do-while loop
$s=5;
do{
    print$s. "<br>";
    $s++;
}while ($s<15);
?>
<h1>FOR LOOP</h1>
<?php
//for loop

for($f= 45; $f <= 55; $f++) {
    print$f. "<br>";
  };
?>
<h1>Foreach</h1>
<?php
$months=["January","February", "March", "April", "May", "June", "July",
 "August", "September", "October", "November","December"];

 //oreach($months AS $months){
  // print$months. "<br>"//


?>

<form action="">
    <select name=""id="">
        <option value="">--Months--</option>
<?php
 foreach($months AS $month){
    print "<option value=' '>$month</option>";
 }

 ?>
        </select>
        <select name=""id="">
            <option value" "><?php print date('y')?></option>
            <?php
            foreach($months AS $month){
                print "<option value=' '>$month</option>";
             }
             ?>
             </select>
             </form>
//while loop
//$y=2024;//
//while
