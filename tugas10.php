<?php
$arr = array(1,3,8,2,5,7,4,0);

print("Sebelum Di Sorting :<br>");
print_r($arr);

$arr = bubble_sort($arr);
print("<br> Setelah Disorting (Buble Sort) :<br>");
print_r($arr);


function bubble_sort($arr) {
        //Tulias Kode Kamu disini
        $arr_res = $arr;
        $index=0;
        for ($i=0; $i <count($arr_res)-1 ; $i++) { 
            for ($j=0; $j <count($arr_res)-1-$i ; $j++) { 
                if($arr_res[$j]>$arr_res[$j+1]){
                    $temp = $arr_res[$j];
                    $arr_res[$j] = $arr_res[$j+1];
                    $arr_res[$j+1] = $temp;
                }
            }
            
        }
        return $arr_res;
}
?>