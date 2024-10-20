<?php
        print_r($_POST);    
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $randomNumber = rand(1, 6);
                $numberWords = [
                    1 => "One",
                    2 => "Two",
                    3 => "Three",
                    4 => "Four",
                    5 => "Five",
                    6 => "Six"
                ];
                header("Location: Q6.php?result=$randomNumber&word=" . urlencode($numberWords[$randomNumber]));
                exit();
            }

            if (isset($_GET['result']) && isset($_GET['word'])) {
                $result = $_GET['result'];
                $word = $_GET['word'];
                echo "<h3>Dice Roll: $word</h3>";
            }
?>