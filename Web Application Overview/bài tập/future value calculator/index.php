<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
    <title>Future Value Calculator</title>

    <style>
        #content {
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }

        h1 {
            color: navy;
        }

        label {
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        #data input {
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        #buttons input {
            float: left;
            margin-bottom: .5em;
        }

        br {
            clear: left;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div id="content">
        <h1>Future Value Calculator</h1>

        <form action="display_result.php" method="POST">
            <div id="data">
                <label>Investment Amount:</label>
                <input type="number" name="investment" value="0" /><br />

                <label>Yearly Interest Rate:</label>
                <input type="number" name="rate" value="0" /><br />

                <label>Number of Years:</label>
                <input type="number" name="years" value="0" />
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate" /><br />
            </div>
        </form>
    </div>
</body>