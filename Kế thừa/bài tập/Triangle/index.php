<?php
include_once "shape.php";
include_once "triangle.php";

//$shap1 = new Shape("rectangle");
//echo $shap1->show();
//echo "<br>";
//$triangle1 = new Triangle("regular");
//echo $triangle1->__toString();
?>
<html>
<head>
    <style>
        input[type=number] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
            margin-bottom: 5px;
        }

        #submit {
            background-color: aqua;
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
            margin-left: 125px;
        }
    </style>
</head>
<body>
<?php
$sideErr1 = '';
$sideErr2 = '';
$sideErr3 = '';
$side1 = $side2 = $side3 = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["side1"] <= 0) {
        $sideErr1 = "Side must be higher than 0";
    } else {
        $side1 = $_POST["side1"];
    }

    if ($_POST["side2"] <= 0) {
        $sideErr2 = "Side must be higher than 0";
    } else {
        $side2 = $_POST["side2"];
    }

    if ($_POST["side3"] <= 0) {
        $sideErr3 = "Side must be higher than 0";
    } else {
        $side3 = $_POST["side3"];
    }
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Side 1 : <input name="side1" type="number" step="0.01" value="<?php echo $side1 ?>"/><?php echo $sideErr1; ?><br>
    Side 2 : <input name="side2" type="number" step="0.01" value="<?php echo $side2 ?>"/><?php echo $sideErr2; ?><br>
    Side 3 : <input name="side3" type="number" step="0.01" value="<?php echo $side3 ?>"/><?php echo $sideErr3; ?><br>
    <input type="submit" id="submit" value="Show"/>
</form>
<?php
function checkIsTriangle($side1, $side2, $side3)
{
    if ($side1 >= ($side2 + $side3) || $side2 >= ($side1 + $side3) || $side3 >= ($side1 + $side2)) {
        try {
            throw new Exception("This triangle is not valid.");
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    } else {
        $triangle1 = new Triangle("triangle1", $side1, $side2, $side3);
        echo $triangle1->__toString();

    }

}

checkIsTriangle($side1, $side2, $side3);
?>
</body>
</html>
