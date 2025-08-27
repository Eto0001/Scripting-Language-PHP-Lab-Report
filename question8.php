<!DOCTYPE html>
<html>
<head>
    <title>Calculate Animal Legs</title>
</head>
<body>
    <h2>Animal Legs Calculator</h2>
    <form method="post" action="">
        <label for="chickens">Number of Chickens:</label>
        <input type="number" name="chickens" id="chickens" required><br><br>

        <label for="cows">Number of Cows:</label>
        <input type="number" name="cows" id="cows" required><br><br>

        <label for="pigs">Number of Pigs:</label>
        <input type="number" name="pigs" id="pigs" required><br><br>

        <input type="submit" name="submit" value="Calculate Legs">
    </form>

    <?php
    if(isset($_POST['submit'])) {
    
        $chickens = $_POST['chickens'];
        $cows = $_POST['cows'];
        $pigs = $_POST['pigs'];

        $total_legs = ($chickens * 2) + ($cows * 4) + ($pigs * 4);

        echo "<h3>Total number of legs: $total_legs</h3>";
    }
    ?>
</body>
</html>
