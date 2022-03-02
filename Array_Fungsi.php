<!DOCTYPE html>
<html>
<body>
    
<?php
$ar_buah = ["P"=>"Pepaya","A"=>"Apel","M"=>"Mangga","J"=>"Jambu" ];
echo '<ol>';
foreach($ar_buah as $k =>$v) {
    echo '<li>'.$k.' - ' . $v .'</li>';
}
echo '</ol>';
sort($ar_buah);
echo '<hr/>';
echo '<ol>';
foreach($ar_buah as $k =>$v) {
    echo '<li>'.$k.' - ' . $v .'</li>';
}
echo '</ol>';
echo '<hr/>';
?>

<?php
// fungsi array pop
    $tims = ["erwin","heru","ali","zaki"];
    array_pop($tims);
    foreach($tims as  $person){
        echo $person.'<br/>';
    }
    echo '<hr/>';
?>

<?php
// fungsi array push
    $tims = ["erwin","heru","ali","zaki"];
    array_push($tims);
    foreach($tims as  $person){
        echo $person.'<br/>';
    }
    echo '<hr/>';
?>

<?php
// fungsi array shift
    $tims = ["erwin","heru","ali","zaki"];
    array_shift($tims);
    foreach($tims as  $person){
        echo $person.'<br/>';
    }
    echo '<hr/>';
?>

<?php
// fungsi array unshift
    $tims = ["erwin","heru","ali","zaki"];
    array_unshift($tims);
    foreach($tims as  $person){
        echo $person.'<br/>';
    }
    echo '<hr/>';
?>


</body>
</html>