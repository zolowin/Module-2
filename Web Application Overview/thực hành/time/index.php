<html>
    <head>
       <title>Thời gian hiện tại</title>
    </head>
    <body>
        <h1> Bây giờ là:
            <?php 
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                echo date('d-M-Y h:m:s');
            ?> 
        </h1>
    </body>
</html>