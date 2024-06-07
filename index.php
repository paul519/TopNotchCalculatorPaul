<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TopNotch Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>TopNotch Calculator</h1>
    <h3>(BSCIT-05-0346/2022)</h3>
    <form action="calculator.php" method="post">
        <input type="number" name="num1" step="any" required placeholder="Enter first number">
        <input type="number" name="num2" step="any" placeholder="Enter second number (if needed)">
        <select name="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
            <option value="exponent">Exponentiation</option>
            <option value="percentage">Percentage</option>
            <option value="sqrt">Square Root</option>
            <option value="log">Logarithm</option>
        </select>
        <button type="submit">Calculate</button>
    </form>
    <div>
        <?php
            if (isset($_GET['result'])) {
                echo "<h2>Result: " . htmlspecialchars($_GET['result']) . "</h2>";
            }
        ?>
    </div>
</body>
</html>
