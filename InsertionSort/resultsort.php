<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pengurutan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Hasil Pengurutan</h1>
    <?php
    if(isset($_POST['sortAscending'])){
        $numbers = explode(",", $_POST['numbers']);
        $sortedNumbers = insertionSortAscending($numbers);
        echo "<p>Angka yang diurutkan secara ascending:</p>";
        echo "<ul>";
        foreach($sortedNumbers as $number){
            echo "<li>$number</li>";
        }
        echo "</ul>";
    }
    elseif(isset($_POST['sortDescending'])){
        $numbers = explode(",", $_POST['numbers']);
        $sortedNumbers = insertionSortDescending($numbers);
        echo "<p>Angka yang diurutkan secara descending:</p>";
        echo "<ul>";
        foreach($sortedNumbers as $number){
            echo "<li>$number</li>";
        }
        echo "</ul>";
    }

    function insertionSortAscending($arr){
        $n = count($arr);
        for($i=1; $i<$n; $i++){
            $key = $arr[$i];
            $j = $i-1;
            while($j>=0 && $arr[$j]>$key){
                $arr[$j+1] = $arr[$j];
                $j--;
            }
            $arr[$j+1] = $key;
        }
        return $arr;
    }

    function insertionSortDescending($arr){
        $n = count($arr);
        for($i=1; $i<$n; $i++){
            $key = $arr[$i];
            $j = $i-1;
            while($j>=0 && $arr[$j]<$key){
                $arr[$j+1] = $arr[$j];
                $j--;
            }
            $arr[$j+1] = $key;
        }
        return $arr;
    }
    ?>
</body>
</html>
