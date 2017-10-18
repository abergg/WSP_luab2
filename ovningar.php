<?php

/* //Övning 1
$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";
 */

/* //Övning 2
$color = array('white', 'green', 'red');
foreach ($color as $c)
{
echo "$c, ";
}
sort($color);
foreach ($color as $y)
*/

/* //Övning 3
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
"Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
"Germany" => "Berlin", "Greece" => "Athens",
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid",
"Sweden"=>"Stockholm", "United Kingdom"=>"London",
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
"Austria" => "Vienna", "Poland"=>"Warsaw") ;
asort($ceu) ;
foreach($ceu as $country => $capital)
{
echo "The capital of $country is $capital"."\n" ;
}
*/

/* //Övning 4
 $x = array(1, 2, 3, 4, 5);
 var_dump($x);
 unset($x[3]);
 $x = array_values($x);
 echo '
';
var_dump($x);
*/

/* //Övning 5
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."\n";
*/

/* //Övning 6
function w3rfunction($value,$key)
{
echo "$key : $value"."\n";
}
$a = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail":
{
"Publisher": "Little Brown"
 }
  }';
$j1 = json_decode($a,true);
array_walk_recursive($j1,"w3rfunction");
*/

/* //Övning 7
$original = array( '1','2','3','4','5' );
echo 'Original array : '."\n";
foreach ($original as $x)
{echo "$x ";}
$inserted = '$';
array_splice( $original, 3, 0, $inserted );
echo " \n After inserting '$' the array is : "."\n";
foreach ($original as $x)
{echo "$x ";}
echo "\n"
*/

/* //Övning 8
echo "
Associative array : Ascending order sort by value
";
$array2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); asort($array2);
foreach($array2 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
echo "
Associative array : Ascending order sort by Key
";
$array3=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); ksort($array3);
foreach($array3 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
echo "
Associative array : Descending order sorting by Value
";
$age=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
arsort($age);
foreach($age as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
echo "
Associative array : Descending order sorting by Key
";
$array4=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); krsort($array4);
foreach($array4 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
*/

/* //Övning 9
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
";
sort($temp_array);
echo " List of seven lowest temperatures :";
for ($i=0; $i< 5; $i++)
{
echo $temp_array[$i].", ";
}
echo "List of seven highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
*/

/* //Övning 10
function columns($uarr)
{
$n=$uarr;
if (count($n) == 0)
 return array();
else if (count($n) == 1)
 return array_chunk($n[0], 1);
array_unshift($uarr, NULL);
 $transpose = call_user_func_array('array_map', $uarr);
return array_map('array_filter', $transpose);
}
function bead_sort($uarr)
{
foreach ($uarr as $e)
 $poles []= array_fill(0, $e, 1);
return array_map('count', columns(columns($poles)));
}
echo 'Original Array : '.'
';
print_r(array(5,3,1,3,8,7,4,1,1,3));
echo '
'.'After Bead sort : '.'
';
print_r(bead_sort(array(5,3,1,3,8,7,4,1,1,3)));
*/

/* //Övning 11
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
function merge_arrays_by_index($x, $y)
{
$temp = array(); $temp[] = $x; if(is_scalar($y))
{
$temp[] = $y;
}
else
{
foreach($y as $k => $v)
{
$temp[] = $v;
}
}
return $temp;
}
echo '<pre>'; print_r(array_map('merge_arrays_by_index',$array2, $array1));
*/

/* //Övning 12
function array_change_value_case($input, $ucase)
{
$case = $ucase;
$narray = array();
if (!is_array($input))
{
return $narray;
}
foreach ($input as $key => $value)
{
if (is_array($value))
{
$narray[$key] = array_change_value_case($value, $case);
 continue;
}
$narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
}
return $narray;
}
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
echo 'Actual array ';
print_r($Color);
echo 'Values are in lower case.';
$myColor = array_change_value_case($Color,CASE_LOWER);
print_r($myColor);
echo 'Values are in upper case.';
$myColor = array_change_value_case($Color,CASE_UPPER);
print_r($myColor);
*/

/* //Övning 13
 echo implode(",",range(200,250,4))."\n";
*/

/* //Övning 14
$my_array = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $my_array);
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';
*/

/* //Övning 15
$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}
echo "\n"
*/

/* //Övning 16
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
"United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=> "Valetta","Austria" => "Vienna", "Poland"=>"Warsaw") ;
$max_key = max( array_keys( $ceu) );
echo $max_key."\n";
*/

/* //Övning 17
function min_values_not_zero(Array $values)
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero(array(-1,0,1,12,-100,1))."\n");
*/

/* //Övning 18
function floorDec($number, $precision, $separator)
{
$number_part=explode($separator, $number);
$number_part[1]=substr_replace($number_part[1],$separator,$precision,0);
if($number_part[0]>=0)
{$number_part[1]=floor($number_part[1]);}
else
{$number_part[1]=ceil($number_part[1]);}

$ceil_number= array($number_part[0],$number_part[1]);
return implode($separator,$ceil_number);
}
print_r(floorDec(1.155, 2, ".")."\n");
print_r(floorDec(100.25781, 4, ".")."\n");
print_r(floorDec(-2.9636, 3, ".")."\n");
*/

/* //Övning 19
$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));
echo $color["holes"][5]."\n";
echo $color["color"]["a"]."\n";
*/

/* //Övning 20
function list_cmp($a, $b)
{
  global $order;

  foreach($order as $key => $value)
    {
      if($a==$value)
        {
          return 0;
          break;
        }

      if($b==$value)
        {
          return 1;
          break;
        }
    }
}

$order[0] = 1;
$order[1] = 3;
$order[2] = 4;
$order[3] = 2;

$array[0] = 2;
$array[1] = 1;
$array[2] = 3;
$array[3] = 4;
$array[4] = 2;
$array[5] = 1;
$array[6] = 2;

usort($array, "list_cmp");

print_r($array);
*/

/* //Övning 21
function sort_subnets ($x, $y) {
    $x_arr = explode('.', $x);
    $y_arr = explode('.', $y);
    foreach (range(0,3) as $i) {
        if ( $x_arr[$i] < $y_arr[$i] ) {
            return -1;
        }
        elseif ( $x_arr[$i] > $y_arr[$i] ) {
            return 1;
        }
    }
    return -1;
}

$subnet_list =
array('192.169.12',
'192.167.11',
'192.169.14',
'192.168.13',
'192.167.12',
'122.169.15',
'192.167.16'
);
usort($subnet_list, 'sort_subnets');
print_r($subnet_list);
*/

/* //Övning 22
$arra[0]["transaction_id"] = "2025731470";
$arra[1]["transaction_id"] = "2025731450";
$arra[2]["transaction_id"] = "1025731456";
$arra[3]["transaction_id"] = "1025731460";
$arra[0]["user_name"] = "Sana";
$arra[1]["user_name"] = "Illiya";
$arra[2]["user_name"] = "Robin";
$arra[3]["user_name"] = "Samantha";

function convert_timestamp($timestamp){
    $limit=date("U");
    $limiting=$timestamp-$limit;
    return date ("Ymd", mktime (0,0,$limiting));
}
function cmp ($a, $b) {
    $l=convert_timestamp($a["transaction_id"]);
    $k=convert_timestamp($b["transaction_id"]);
    if($k==$l){
        return strcmp($a["user_name"], $b["user_name"]);
    }else{
        return strcmp($k, $l);
    }
}
usort($arra, "cmp");

while (list ($key, $value) = each ($arra)) {
    echo "\$arra[$key]: ";
    echo $value["transaction_id"];
    echo " user_name: ";
    echo $value["user_name"];
    echo "\n";
}
*/

/* //Övning 23
function column_Sort($unsorted, $column) {
    $sorted = $unsorted;
    for ($i=0; $i < sizeof($sorted)-1; $i++) {
      for ($j=0; $j<sizeof($sorted)-1-$i; $j++)
        if ($sorted[$j][$column] > $sorted[$j+1][$column]) {
          $tmp = $sorted[$j];
          $sorted[$j] = $sorted[$j+1];
          $sorted[$j+1] = $tmp;
      }
    }
    return $sorted;
}
$my_array = array();
$my_array[0]['name'] = 'Sana';
$my_array[0]['email'] = 'sana@example.com';
$my_array[0]['phone'] = '111-111-1234';
$my_array[0]['country'] = 'USA';

$my_array[1]['name'] = 'Robin';
$my_array[1]['email'] = 'robin@example.com';
$my_array[1]['phone'] = '222-222-1235';
$my_array[1]['country'] = 'UK';

$my_array[2]['name'] = 'Sofia';
$my_array[2]['email'] = 'sofia@example.com';
$my_array[2]['phone'] = '333-333-1236';
$my_array[2]['country'] = 'India';
print_r(column_Sort($my_array, 'name'));
*/

/* //Övning 24
$colors = array(
    "color1", "color20", "color3", "color2"
);
sort($colors, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($colors as $key => $val) {
    echo "Colors[" . $key . "] = " . $val . "\n";
}
*/

/* //Övning 25

*/
?>
