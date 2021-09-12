<?php
$arr = array(1,3,8,2,5,7,4,0);

print("Sebelum Di Sorting :<br>");
print_r($arr);

$arr = bubble_sort($arr);
print("<br> Setelah Disorting (Buble Sort) :<br>");
print_r($arr);


function bubble_sort($arr) {
  for($i=0;$i<8;$i++){
    $j=$i+1;
    while($j<8){
      if($arr[$i]>$arr[$j]){
        $c=$arr[$i];
        $arr[$i]=$arr[$j];
        $arr[$j]=$c;
      }else {
        $arr[$i]=$arr[$i];
      }
      $j++;
    }
  }
  return $arr;
}
?>
