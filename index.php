<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="overall">
        <form method="post" action="index.php">
            <label for="xvalue">X Value</label><br/>
            <input type="number" id="xvalue" name="xvalue" value="<?php echo isset($_POST['xvalue']) ? htmlspecialchars($_POST['xvalue']) : ''; ?>"><br/>
            <label for="yvalue">Y Value</label><br/>
            <input type="number" id="yvalue" name="yvalue" value="<?php echo isset($_POST['yvalue']) ? htmlspecialchars($_POST['yvalue']) : ''; ?>"><br/>
            <input type="submit" value="Submit" id="submit" name="submit"><br/>
            <?php
            if (isset($_POST["submit"])) {
                $x = $_POST["xvalue"];
                $y = $_POST["yvalue"];

                if ($x === "" || $y === "") {
                    echo "You did not enter a value.";
                } else {
                    $x = (float)$x;
                    $y = (float)$y;

                    if ($x == 0 && $y == 0) {
                        echo "Mid Point";
                    } elseif ($x > 0 && $y > 0) {
                        echo "Quadrant I";
                    } elseif ($x < 0 && $y > 0) {
                        echo "Quadrant II";
                    } elseif ($x < 0 && $y < 0) {
                        echo "Quadrant III";
                    } elseif ($x > 0 && $y < 0) {
                        echo "Quadrant IV";
                    } else {
                        echo "On Axis";
                    }
                }
            }
            ?>
        </form>
    </div>
</body>
</html>
