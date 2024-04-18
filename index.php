<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Giải phương trình bậc 2</title>
</head>
<body>
    <h1>Giải phương trình bậc 2</h1>
    <form action="index.php" method="post">
        <label for="a">Hệ số a:</label>
        <input type="number" id="a" name="a" value="">
        <br>
        <label for="b">Hệ số b:</label>
        <input type="number" id="b" name="b" value="">
        <br>
        <label for="c">Hệ số c:</label>
        <input type="number" id="c" name="c" value="">
        <br>
        <br>
        <input type="submit" value="Giải">
    </form>
    <br>

    <?php
    require_once('PhuongTrinhBac2.php');


if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])) {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    $pt = new PhuongTrinhBac2($a, $b, $c);
    echo $pt . "<br>";
    $pt->giaiPhuongTrinh();
}
    ?>
</body>
</html
