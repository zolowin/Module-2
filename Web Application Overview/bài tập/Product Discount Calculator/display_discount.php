<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
    <title>Future Value Calculator</title>

    <style>
        #content {
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 30px;
            background: white;
            border: 2px solid navy;
        }

        h1 {
            color: navy;
        }

        label {
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        #data input {
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        #buttons input {
            float: left;
            margin-bottom: .5em;
        }

        br {
            clear: left;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $description = $_POST["description"];
            $price = $_POST["price"];
            $discount_percent = $_POST["discount_percent"];
            $discount_amount = $price * $discount_percent/100;
            $discount_price = $price - $discount_amount;
        }
    
    ?>
    <div id="content">
        <h1>Product Discount Calculator</h1>
        <form method="post" action="display_discount.php">
            <div id="data">
                <label>Product Description:</label>
                <?php echo $description ?><br />

                <label>List Price:</label>
                <?php echo $price ?><br />

                <label>Discount Percent: </label>
                <?php echo $discount_percent. "(%)"?><br />

                <label>Discount Amount :</label>
                <?php echo $discount_amount ?><br />

                <label>Discount Price :</label>
                <?php echo $discount_price ?><br />

            </div>
        </form>
    </div>
</body>

</html>