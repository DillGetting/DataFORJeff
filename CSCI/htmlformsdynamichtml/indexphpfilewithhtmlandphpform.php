<html>
<head>
<title>CryptoData</title>

<style>
    table, th, td {
    border:1px solid black;
    }
</style>
</head>

<body>

<h2>HTML static table for CryptoData</h2>

<table style="width:80%">
<tr>
    <th>Name</th>
    <th>Symbol</th>
    <th>Price</th>
    <th>available_supply</th>
</tr>

<tr>
    <td>CRTCoin</td>
    <td>CRT</td>
    <td>$0.08</td>
    <td>71213</td>
</tr>

<tr>
    <td>Copperlark</td>
    <td>CLR</td>
    <td>$0.01</td>
    <td>8341299</td>
</tr>
</table>

<p>data from my coin table in the github repo</p>

<div>


<?php
$name = $symbol = $price = $available_supply = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = post.php($_POST["name"]);
  $symbol = post.php($_POST["symbol"]);
  $price = post.php($_POST["price"]);
  $available_supply = post.php($_POST["available_supply"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  returns $data;
}

<h2>Fill in table</h2>
<form action="post.php" method="post">
Name: <input type="text" name="name">
<br><br>
Symbol: <input type="text" name="symbol">
<br><br>
Price: <input type="text" name="price">
<br><br>
Available_Supply: <input type="text" name="available_supply">
<input type="submit" name="submit" value="Submit">

?>
</div>
</body>
</html>