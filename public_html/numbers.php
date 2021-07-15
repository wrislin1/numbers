<?php
$numbers = explode(',',$_POST["numbers"]);
$stats =['odd'=>0,'even'=>0,'count'=>count($numbers),'max'=>max($numbers),'min'=>min($numbers),'sum'=>array_sum($numbers)];
foreach ($numbers as $num){
    if($num%2==0){
        $stats['even']++;
    }
    else{
        $stats['odd']++;
    }
}
$result = "There are {$stats['even']} even numbers and {$stats['odd']} odd numbers";
$sum="The sum of the numbers is {$stats['sum']}";
$max="The biggest number is {$stats['max']}, and the smallest is {$stats['min']}"
?>

<html lang="en">
<body>

Your numbers are: <?php echo "{$_POST['numbers']} {$sum}  {$max}"; ?>

</body>
</html>
