<html>
    <head>
        <title>color change</title>
    </head>
    <?php
    $name = "white";
    $name = $_POST["color"];
    echo "<body bgcolor=$name>"
        ?>

    <h2>color changing page</h2>
    <p>page will change it`s color when u cilck</p>

    <form method="POST" action="color_changing.php">

        Red<input type="radio" name="color" value="red">
        green<input type="radio" name="color" value="green">
        pink<input type="radio" name="color" value="pink">
        yellow<input type="radio" name="color" value="yellow">
        orange<input type="radio" name="color" value="orange">
        purple<input type="radio" name="color" value="purple">
        blue<input type="radio" name="color" value="blue">
        skyblue<input type="radio" name="color" value="skyblue">
        brown<input type="radio" name="color" value="brown">
        gray<input type="radio" name="color" value="gray">

        <br><br>
        <input type="submit" value="Do it">

</html>