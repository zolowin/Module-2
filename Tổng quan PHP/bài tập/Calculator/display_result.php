<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <style>
        #content {
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 30px;
            background: white;
            border: 2px solid navy;
        }

        label {
            width: 10em;
            margin-bottom: 5px;
            float: left;
        }

        
        #buttons input {
            float: left;
            margin-bottom: .5em;
        }
    </style>
</head>

<body>
    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $first_operand = $_POST["first_operand"];
            $second_operand = $_POST["second_operand"];
            $operater = $_POST["operater"];
                switch($operater){
                    case "Addition":
                        $result = $first_operand + $second_operand;
                        break;
                    case "Subtraction":
                        $result = $first_operand - $second_operand;
                    break;
                    case "Multiplication":
                        $result = $first_operand * $second_operand;
                    break;
                    case "Division" :
                        $result = $first_operand / $second_operand;
                    break;  
                    }
        }
    
    ?>

    <form method="post">
        <div id="content">
            <h2>Simple Calculator</h2>
            <fieldset>
                <legend>Calculator</legend>
                <label>First operand: </label>
                <label><?php echo $first_operand ?></label><br />

                <label>Operater: </label>
                <label><?php echo $operater ?></label><br />

                <label>Second operand: </label>
                <label><?php echo $second_operand ?></label><br />
                
                <label> Result: </label>
                <label><?php echo $result ?></label>
            </fieldset>
        </div>

    </form>
</body>

</html>