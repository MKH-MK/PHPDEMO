
<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $count = $_POST['count'];
            if (!isset($_POST['numbers'])) {
                for ($i = 1; $i <= $count; $i++) {
                    echo "<label for='number$i'>Enter number $i:</label>";
                    echo "<input type='number' step='any' id='number$i' name='numbers[]' required><br>";
                }
                echo "<input type='hidden' name='count' value='$count'>";
                echo '<input type="submit" value="Calculate">';
                echo '</form>';
            } else {
                $numbers = $_POST['numbers'];
                $total = array_sum($numbers);
                $mean = $total / count($numbers);
                header("Location: PHPAVERAGE.html?total=$total&mean=$mean");
                exit();                }
        }
           if (isset($_GET['total']) && isset($_GET['mean'])) {
                $total = $_GET['total'];
                $mean = $_GET['mean'];

                echo "<h3>Results:</h3>";
                echo "<p>Total: $total</p>";
                echo "<p>Mean: $mean</p>";
            }
?>