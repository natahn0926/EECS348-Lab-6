<!DOCTYPE html>
<html>
<head>
    <title>Practice 4</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #dbeafe;
        }
    </style>
</head>
<body>
    <h1>EECS 348 Lab Six Practice Four</h1>

    <form method="post" action="practice4.php">
        <label for="size">Size of the multiplication table:</label>
        <input type="number" id="size" name="size" min="1" required>
        <input type="submit" value="Generate Table">
    </form>

    <br>

    <?php
    if (isset($_POST["size"])) {
        $size = intval($_POST["size"]);

        echo "<table>";
        echo "<tr><th></th>";

        for ($col = 1; $col <= $size; $col++) {
            echo "<th>$col</th>";
        }
        echo "</tr>";

        for ($row = 1; $row <= $size; $row++) {
            echo "<tr>";
            echo "<th>$row</th>";

            for ($col = 1; $col <= $size; $col++) {
                $value = $row * $col;
                echo "<td>$value</td>";
            }

            echo "</tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
