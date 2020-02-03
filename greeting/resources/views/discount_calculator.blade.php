<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post">
    <div class="container">
        <label>Product Description:</label>
        <input type="text" name="description" />{{$descriptionErr}}<br/>
        <label>List Price:</label>
        <input type="number" name="price" />{{$priceErr}}<br/>
        <label>Discount Percent: </label>
        <input type="number" name="discount_percent" />{{$discount_percentErr}}<br/>
    </div>
    <div id="buttons">
        <input type="submit" value="Calculate Discount" />
    </div>
</form>

<div class="text-center">
    <p>amount after discount is : {{$discount_amount}}}</p>
</div>

</body>
</html>
