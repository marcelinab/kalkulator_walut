<html>

<head>
<title>Kalkukator walut</title>
</head>

<body>
<?php

require_once 'rate.php';

$currency = 'usd';
$date = '2016-04-04';

var_dump(get_rate($currency, $date));
var_dump(get_rate('eur', $date));

?>
<footer><p>footer</p></footer>
</body>
</html>