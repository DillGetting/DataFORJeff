<?php
$f = $c = ' ';

if (isset($_POST['f'])) $f = sanatizeString($_POST['f']);
if (isset($_POST['c'])) $c = sanatizeString($_POST['c']);

if ($f != ' ')
{
    $c = intval((5 / 9) * ($f - 32));
    $out = "$f f equalce $c c";

}
elseif($c != ' ')
{
    $f = intval((9 / 5) * $c +32);
    $out = "$c c equals $f f";
}
else $out = " ";

echo<<<_END
<html>
<head>
<title>Temperature Converter</title>
</head>
<body>
<pre>
Enter either Farenheit or Celsius and click on Convert

<b>$out</b>
<form method="post" action="convert.php">
Farenheit <input type="text" name="f" size="7">
Celcius <input type="text" name="c" size="7">
<input type="submit" value="Convert">
</form>
</pre>
</body>
</html>
_END;

function sanatizeSting($var)
{
    $var = stripslashes($var);
    $var  = strip_tags($var);
    $var = htmlentities($var);
    return $var;
}

?>