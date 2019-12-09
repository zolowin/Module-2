<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
     if($_SERVER["REQUEST_METHOD"] === "POST") {
        function isPrimeNumber($n) {
            if ($n < 2) {
                return false;
            }
            for($i = 2; $i <= sqrt ( $n ); $i ++) {
                if ($n % $i == 0) {
                    return false;
                }
            }
            return true;
        }
        
        $amount = $_POST["amount"];
        $count = 0;
        $i = 0;
        
        echo $amount. " primes are: <br>";
        while($count < $amount) {
            if(isPrimeNumber($i)) {
                echo $i;
                echo " ";
                $count++;                
            }         
            $i++;
        }

     }
    ?>
</body>

</html>