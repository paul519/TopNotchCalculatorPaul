<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : 0;
    $operation = $_POST['operation'];

    $result = 0;
    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Error: Division by zero';
            }
            break;
        case 'exponent':
            $result = pow($num1, $num2);
            break;
        case 'percentage':
            $result = ($num1 * $num2) / 100;
            break;
        case 'sqrt':
            if ($num1 >= 0) {
                $result = sqrt($num1);
            } else {
                $result = 'Error: Negative number';
            }
            break;
        case 'log':
            if ($num1 > 0) {
                $result = log($num1);
            } else {
                $result = 'Error: Non-positive number';
            }
            break;
        default:
            $result = 'Invalid operation';
            break;
    }

    header('Location: index.php?result=' . urlencode($result));
    exit();
}
?>
