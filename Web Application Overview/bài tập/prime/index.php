<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <style >
        .input_num {
            width: 450px;
            margin: 0 auto;
        }
    
    </style>
</head>

<body>
    <form action="display.php" method="post">
        <div class="input_num">
            <h3>Displays an arbitrary number of prime numbers first</h3>
            <input type="number" name="amount" size="30" placeholder="prime number to print" />
            <input type="submit" value="print" />
        </div>
    </form>
</body>

</html>