<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <header>
        <h1>Simple php Calculator</h1>
    </header>
    <body>
        <div class="form_calculator">
            <form method="post">
            <input type="number" name="num1" placeholder="Enter first Number" required>
            <input type="number" name="num2" placeholder="Enter second Number" required>
            <select name="operation" required>
                <option value="">Select Opertion</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <button type="submit" name="submit">Calculate</button>
            </form>
            <h3>Result : </h3>
        </div>
<?php
if(isset($_POST['submit']))
{
    $num1= $_POST['num1'];
    $num2= $_POST['num2'];
    $operation = $_POST['operation'];
    switch($operation)
    {
        case "+":
            echo $num1 + $num2;
            break;
        case "-":
            echo $num1 - $num2;
            break;
        case "*":
            echo $num1 * $num2;
            break;
        case "/":
            echo $num1 / $num2;
            break;
    }
}
?>
    </body>
</body>
</html>