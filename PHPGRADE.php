<!DOCTYPE html>
<html>
    <head>
        <title>Q3</title>
    </head>
    <body>
        <h1>Grading (Each section is out of 25)</h1>
        <form method="POST" action="PHPGRADECALC.php">
           
            <label for="analysis">Analysis Score: </label>
            <input type="number" id="analysis" name="analysis" required><br><br>
            
            <label for="design">Design Score: </label>
            <input type="number" id="design" name="design" required><br><br>
            
            <label for="implementation">Implementation Score: </label>
            <input type="number" id="implementation" name="implementation" required><br><br>
            
            <label for="evaluation">Evaluation Score: </label>
            <input type="number" id="evaluation" name="evaluation" required><br><br>
           
            <input type="submit" value="Calculate Total & Grade">
        
        </form>
    </body>
</html>