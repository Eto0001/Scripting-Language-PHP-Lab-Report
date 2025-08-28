<?php
$info = [
    'Name' => 'Prem Adhikari',
    'Address' => 'Kathmandu',
    'Email' => 'premadh7@ram.com',
    'Phone' => 98454545,
    'Website' => 'www.prem.com'
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Array in Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 40%;
            margin: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
        }
        th {
            text-align: left;
        }
    </style>
</head>
<body>
    <table>
        <?php
        foreach ($info as $key => $value) {
            echo "<tr><th>$key</th><td>$value</td></tr>";
        }
        ?>
    </table>
</body>
</html>
