<html>
<head>
    <title>form</title>
</head>
<body>

<?php
$name = $symbol = $price = $available_supply = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = post_php($_POST["name"]);
  $symbol = post_input($_POST["symbol"]);
  $price = post_input($_POST["price"]);
  $available_supply = post_input($_POST["available_supply"]);
}

function post_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  returns $data;
}
?>

</body>
</html>