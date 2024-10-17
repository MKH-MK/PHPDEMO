<?php
    if (isset($_GET['total']) && isset($_GET['grade'])) {
        $total = $_GET['total'];
        $grade = $_GET['grade'];
        $marks_needed = $_GET['marks_needed'] ?? 0;

        echo "<h3>Results:</h3>";
        echo "<p>Total Mark: $total / 100</p>";
        echo "<p>Grade: $grade</p>";

        if ($marks_needed > 0) {
                    echo "<p>You need $marks_needed more marks to reach the next grade band.</p>";
        } else {
                    echo "<p>You have achieved the highest grade in your band.</p>";
        }
    }
?>