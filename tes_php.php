<?php 

    $nilai1 = @$_POST['angka1'];
    $nilai2 = @$_POST['angka2'];
    $var_hasil = @$_POST['hasil'];

    if(isset($_POST['tambah']))
    {
        $var_hasil = $nilai1 + $nilai2;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <table>
            <tr>
                <td colspan="3">NILAI ARRAY [1, 3, 6, 7, 2, 5, 8, 4, 9, 0]</td>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
            <tr>
                <td>Angka 1</td>
                <td> : </td>
                <td>
                    <input type="text" name="angka1" value="<?= $nilai1 ?>">
                </td>
            </tr>
            <tr>
                <td>Angka 2</td>
                <td> : </td>
                <td>
                    <input type="text" name="angka2" value="<?= $nilai2 ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="tambah" value="+">
                </td>
            </tr>
            <tr>
                <td>Target</td>
                <td> : </td>
                <td>
                    <input type="text" name="hasil" value="<?= $var_hasil ?>">
                </td>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
            <tr>
                <td colspan="3">
                    <p>Output = <?= $nilai1 ?> + <?= $nilai2 ?> = <?= $var_hasil ?></p></p>
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>
