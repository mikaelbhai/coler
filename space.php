<!DOCTYPE html>
<html>
<head>
    <title>Color Changing Page</title>
    <style>
        body {
            background-color: white;
        }
    </style>
</head>
<body>
    <h1>Press space to change the background color</h1>
    <?php
        if(isset($_POST['change_color'])) {
            $color = getRandomColor();
            echo "<script>document.body.style.backgroundColor = '$color';</script>";
        }

        function getRandomColor() {
            $letters = "0123456789ABCDEF";
            $color = "#";
            for ($i = 0; $i < 6; $i++) {
                $color .= $letters[rand(0, 15)];
            }
            return $color;
        }
    ?>
    <form method="post">
        <input type="submit" name="change_color" value="Change Color">
    </form>
</body>
</html>
