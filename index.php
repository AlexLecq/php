
<html>
<head>
    <title>Test PHP</title>
</head>
<body>
<?php
    include 'db.php';
    $data = get_data();
    echo "<p>Hello  $data !</p>";
?>
</body>
</html>