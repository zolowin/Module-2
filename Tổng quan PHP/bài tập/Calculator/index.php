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
    <form action="display_result.php" method="post">
        <div id="content">
            <h2>Simple Calculator</h2>
            <fieldset>
                <legend>Calculator</legend>
                <label>First operand: </label>
                <label><input type="number" name="first_operand" placeholder="input number" /></label><br />

                <label>Operater: </label>
                <label><select name="operater">
                        <option value="Addition">Addition</option>
                        <option value="Subtraction">Subtraction</option>
                        <option value="Multiplication">Multiplication</option>
                        <option value="Division">Division</option>
                    </select></label><br />

                <label>Second operand: </label>
                <label><input type="number" name="second_operand" /></label><br />
                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Calculate" /><br />
                </div>
            </fieldset>
        </div>

    </form>
</body>

</html>