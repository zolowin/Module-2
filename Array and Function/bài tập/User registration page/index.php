<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <style>
    #content {
      width: 450px;
      height: 150px;
      margin: 0 auto;
      padding: 0px 20px 30px;
      background: white;
      border: 2px solid navy;
    }

    input {
      width: 280px
    }

    h2 {
      text-align: center;
    }

    label {
      width: 10em;
      margin-bottom: 5px;
      float: left;
    }

    #buttons input {
      width: 100px;
      float: left;
    }

	.error{
		color : red;
	}
  </style>
</head>

<body>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div id="content">
      <h2>Registration Use</h2>
      <label>Username: </label>
      <label><input type="text" name="username" placeholder="name" /></label><br />

      <label>Email: </label>
      <label><input type="text" name="email" placeholder="email" /></label><br />

      <label>Phone number: </label>
      <label><input type="number" name="phone" placeholder="phoneNumber" /></label><br />
      <div id="buttons">
        <label>&nbsp;</label>
        <input type="submit" value="Submit" /><br />
      </div>
    </div>
  </form>

  <?php
  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $name = $email = $phone = "";
  $nameErr =  $emailErr = $phoneErr = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
      $nameErr = "Name is required";
    } else {
    $name = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
	}

	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
	  } else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		          $emailErr = "Invalid email format";
	        } else {
		        $email = test_input($_POST["email"]);
	  }
	}

	if (empty($_POST["phone"])) {
		$phoneErr = "Phone is required";
	  } else {
		  $phone = test_input($_POST["phone"]);
	}
  
  ?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div id="content">
      <h2>Registration Use</h2>
      <label>Username: </label>
      <label><input type="text" name="username" placeholder="name" /></label>
      <span class="error"><?php echo "*".$nameErr; ?></span>
      <br /><br />

      <label>Email: </label>
      <label><input type="text" name="email" placeholder="email" /></label><br />
      <span class="error"><?php echo "*".$emailErr; ?></span>
      <br /><br />

      <label>Phone number: </label>
      <label><input type="number" name="phone" placeholder="phoneNumber" /></label><br />
      <span class="error"><?php echo "*".$phoneErr; ?></span>
      <br /><br />

      <div id="buttons">
        <label>&nbsp;</label>
        <input type="submit" value="Submit" /><br />
      </div>
    </div>
  </form>
</body>

</html>