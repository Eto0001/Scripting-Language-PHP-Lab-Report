<!DOCTYPE html>
<html>
<head>
    <title>Football Team Points Calculator</title>
</head>
<body>
    <h2>Football Team Points Calculator</h2>

    <form method="post" action="">
        <label for="wins">Number of Wins:</label>
        <input type="number" name="wins" id="wins" required><br><br>

        <label for="draws">Number of Draws:</label>
        <input type="number" name="draws" id="draws" required><br><br>

        <label for="losses">Number of Losses:</label>
        <input type="number" name="losses" id="losses" required><br><br>

        <input type="submit" name="submit" value="Calculate Points">
    </form>

    <?php

    function calculatePoints($wins, $draws, $losses) {
        return ($wins * 3) + ($draws * 1) + ($losses * 0);
    }

    if(isset($_POST['submit'])) {

        $wins = $_POST['wins'];
        $draws = $_POST['draws'];
        $losses = $_POST['losses'];

        $total_points = calculatePoints($wins, $draws, $losses);

        echo "<h3>Total Points: $total_points</h3>";
    }
    ?>
</body>
</html>
