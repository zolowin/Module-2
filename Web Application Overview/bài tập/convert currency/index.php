<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        .container {
            width: 450px;
            margin: 0 auto;
            padding: 10px 20px 40px;
            background: white;
            border: 2px solid navy;
        }

        label {
            margin: auto;
            width: 10em;
            padding: 10px 20px 40px;
        }

        h2 {
            color: navy;
            text-align: center;
        }

    </style>
</head>
<body>
    <form method="post">
        <div class="container">
            <h2>Convert Currency</h2>

            <label>Đô la Mỹ(USD)</label>
            <input type="number" name="usd" />
            
            <input type="submit" value="covert"><br />

            <label>
        <?php 
         if($_SERVER["REQUEST_METHOD"] == "POST") {
            $usd = $_POST["usd"];
            $rate = 23000;
            $vnd = $usd * $rate;
            echo "Việt Nam Đồng(VND) : " .$vnd;
        }
        ?>
            </label>
        </div>
    </form>
  
    
</body>
</html>