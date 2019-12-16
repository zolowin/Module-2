<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php 
        $array = array(
            [1,2,3],
            [4,5,6]
        );
        function findMax($arr) {
            $max = $arr[0][0];
            for($i = 0; $i < count($arr); $i++){
                for($j=0;$j<count($arr[$i]);$j++){
                    if($arr[$i][$j]>$max) {
                        $max = $arr[$i][$j];
                    }
                }
            }
            return $max;
        }
        $result = findMax($array);
        echo "Max of array is: $result"
    ?>
</body>
</html>