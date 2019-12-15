<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        function finMin($arr){
            $min =$arr[0];
            for($i=1;$i<count($arr);$i++){
                if($min>$arr[$i]){
                    $min = $arr[$i];
                }
            }
            return $min;
        }
        $arr1 = array(14,12,20,10); 
        echo finMin( $arr1)."<br>";
        foreach ($arr1 as $value){ 
            echo $value.' '; 
        }
    ?>
</body>
</html>