<?php
           if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $current_balance = $_POST['balance'];
            $interest_rate = $_POST['interest_rate'];
            $desired_balance = $_POST['desired_balance'];
            $year = 0;
            $balances = []; 
            while ($current_balance < $desired_balance) {
                $year++;
                $current_balance += $current_balance * $interest_rate;
                $balances[$year] = $current_balance;
            }
            header("Location: COMPINTCALC.php?results=" . urlencode(json_encode($balances)));
            exit();
        }

           if (isset($_GET['results'])) {
                $results = json_decode($_GET['results'], true);
                echo "<h3>Yearly Balances:</h3>";
                foreach ($results as $year => $balance) {
                    echo "<p>Year $year: Balance = $" . number_format($balance, 2) . "</p>";
                }
            }
        ?>