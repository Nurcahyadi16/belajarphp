<?php
//control flow atau struktur kendali
/*belajar pengulangan dan pengkondisian
Pengulangan
1. For
2. While
3. Do while
4. Foreach adalah pengulangan yg spesifik untuk array

Pengkondisian
1. if else
2. if else if else
3. ternary
4. switch
*/

//pengulangan
for ($i = 0; $i < 5; $i++) {
    echo "Hello For! <br>";
}

$u = 0;
while ($u < 5) {
    echo "Hello While! <br>";
    $u++;
}

$y = 0;
do {
    echo "Hello Do While <br>";
    $y++;
} while ($y < 5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BelajarPhP2</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($z = 1; $z <= 3; $z++) {
            echo "<tr>"; //ini menggunakan tag pengulangan PHP
            for ($j = 1; $j <= 5; $j++) {
                echo "<td> $z,$j</td>";
            }
            echo "</tr>";
        }
        ?>

        <!--ini menggunakan tag pengulangan PHP dengan gaya templete-->
        <?php for ($p = 1; $p <= 5; $p++): ?>
            <tr>
                <?php for ($o = 1; $o <= 5; $o++): ?>
                    <td>
                        <?php echo "$p,$o" ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>

        <!-- ini membuat table menggunakan tag html-->
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
        </tr>

    </table>
</body>

</html>