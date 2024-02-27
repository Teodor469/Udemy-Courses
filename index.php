<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Learn PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Learn PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
        <form action="index.php" method="post">
                <label>Calculate</label>
                <input type="text" name="num1" placeholder="Enter number 1">
                <input type="text" name="num2" placeholder="Enter number 2">
                <input type="text" name="symbol" placeholder="Enter +, -, *, or /">
                <input type="submit" value="Calculate">
            </form>
            <?php
            if (isset($_POST["symbol"])) {
                $num1 = isset($_POST["num1"]) ? $_POST["num1"] : null;
                $num2 = isset($_POST["num2"]) ? $_POST["num2"] : null;
                $symbol = isset($_POST["symbol"]) ? $_POST["symbol"] : null;
                $result = null;

                // Checking for division by zero
                if ($symbol === '/' && $num2 == 0) {
                    echo "Cannot divide by zero.";
                } else {
                    // Performing calculations based on the selected symbol
                    switch ($symbol) {
                        case '+':
                            $result = $num1 + $num2;
                            break;
                        case '-':
                            $result = $num1 - $num2;
                            break;
                        case '*':
                            $result = $num1 * $num2;
                            break;
                        case '/':
                            $result = $num1 / $num2;
                            break;
                        default:
                            echo "Invalid symbol.";
                    }
                    echo "Result: $result";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>