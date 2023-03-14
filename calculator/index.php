<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>

<body>
    <form>
        <input type='text' name='num1' placeholder="number1">
        <input type='text' name='num2' placeholder="number2">
        <select name='operator'>
            <option>NONE</option>
            <option>ADD</option>
            <option>SUBSTRACT</option>
            <option>MULTIPLY</option>
            <option>DIVIDE</option>
        </select>
        </br>
        <button type='submit' name='submit' value="sumbit">CALCULATE</button>
    </form>
    <p>THE ANSWER IS:</p>
    <?php
    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];

        switch ($operator) {
            case 'NONE':
                echo 'error';
                break;
            case 'ADD':
                echo $result1 + $result2;
                break;
            case 'SUBSTRACT':
                echo $result1 - $result2;
                break;
            case 'MULTIPLY':
                echo $result1 * $result2;
                break;
            case 'DIVIDE':
                echo $result1 / $result2;
                break;
        }
    };
    ?>
</body>

</html>