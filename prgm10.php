<?php
function removeDuplicates($sortedList) {
 $length=count($sortedList);
     if ($length=0) {
       return $sortedList;
}
$result = array($sortedList[0]);
for ($i=1;$i<$length; $i++) {
  if ($sortedList[$i] != $sortedList[Si - 1]) {
    $result[] = $sortedList[$i];
  }
}
return $result;
}
$sortedList= array(1,2,2,3,4,4,4,5,6,6,7);
$uniqueList=removeDuplicates($sortedList);
echo "Original Sorted List:".implode(", ", $sortedList). "<br>";
echo "List with Duplicates Removed: ". implode(", ", $uniqueList). "\n";
?>