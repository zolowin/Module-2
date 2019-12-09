<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <form method="post">
        <h3>Application to read numbers into words</h3>
        <input type="number" name="search" placehoder="input numbers want read into words"/>
        <input type="submit" value='swap'/>
    </form>
    <?php 
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            $search = $_POST["search"];
                switch($search) {
                    case 0:
                        echo $search. " : zero";
                        break;
                    case 1:
                        echo $search. " : one";
                        break;
                    case 2:
                        echo $search. " : two";
                        break;
                    case 3:
                        echo $search. " : three";
                        break;
                    case 4:
                        echo $search. " : four";
                        break;
                    case 5:
                        echo $search. " : five";
                        break;
                    case 6: 
                        echo $search. " : six";
                        break;
                    case 7: 
                        echo $search. " : seven";
                        break;
                    case 8: 
                        echo $search. " : eight";
                        break;
                    case 9: 
                        echo $search. " : nine";
                        break;
                    case 10: 
                        echo $search. " : ten";
                        break;
                    default:
                        echo "Out of ability";                   
                }
        }
    ?>
</body>
</html>