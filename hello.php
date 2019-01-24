<html>
<link rel="stylesheet" type="text/css" href="simple.css">
<head>
<title>PHP Test</title>
</head>
<body>
<p>Hello World</p>

<?php
// outputs e.g. 'Last modified: March 04 1998 20:43:59.'
echo "This page last modified: " . date ("F d Y H:i:s.", getlastmod());
?>

<div>&copy; <?php echo date("Y"); ?> Copyright.</center></div>
</body>
</html>
