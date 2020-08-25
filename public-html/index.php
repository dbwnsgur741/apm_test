<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'dbInfo.php';

    $sql = 'SELECT * from TestTable';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        echo "id : " . $row['id']. " - Name : " . $row['name'] . "<br>";
    }

$conn->close();

    ?>
</body>
</html>