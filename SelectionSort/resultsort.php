<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pengurutan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Hasil Pengurutan</h1>
    <?php
    if(isset($_POST['numbers'])){
        $numbers = explode(",", $_POST['numbers']);
        $numbers = array_map('trim', $numbers);
        $numbers = array_map('intval', $numbers);

        function selectionSort($arr){
            $n = count($arr);
            for($i=0; $i<$n-1; $i++){
                $maxIndex = $i;
                for($j=$i+1; $j<$n; $j++){
                    if($arr[$j] > $arr[$maxIndex]){
                        $maxIndex = $j;
                    }
                }
                $temp = $arr[$i];
                $arr[$i] = $arr[$maxIndex];
                $arr[$maxIndex] = $temp;
            }
            return $arr;
        }

        $sortedNumbers = selectionSort($numbers);

        echo "<p>Angka sebelum diurutkan: " . implode(", ", $numbers) . "</p>";
        echo "<p>Angka setelah diurutkan secara descending: " . implode(", ", $sortedNumbers) . "</p>";
    }
    ?>
</body>
</html>
