<!DOCTYPE html>
<html>
<head>
    <title>Hasil Bubble Sort</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Hasil Bubble Sort</h1>
    <?php
    // Mendapatkan inputan angka dari pengguna
    $numbers = $_POST['numbers'];

    // Memisahkan angka-angka yang diinputkan
    $arr = explode(',', $numbers);

    // Mengubah string menjadi array angka
    $arr = array_map('intval', $arr);

    // Fungsi Bubble Sort
    function bubbleSort($arr) {
        $n = count($arr);
        for ($i = 0; $i < $n-1; $i++) {
            for ($j = 0; $j < $n-$i-1; $j++) {
                if ($arr[$j] > $arr[$j+1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            }
        }
        return $arr;
    }

    // Memanggil fungsi Bubble Sort
    $sortedArr = bubbleSort($arr);

    // Menampilkan hasil pengurutan
    echo "<p>Angka yang diinputkan: " . implode(', ', $arr) . "</p>";
    echo "<p>Hasil pengurutan (ascending): " . implode(', ', $sortedArr) . "</p>";
    ?>
</body>
</html>
