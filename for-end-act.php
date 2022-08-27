<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ends With</title>
</head>
<body>
    <form action="" method="post">
        <label for="num">Number</label>
        <input type="number" name="num" id="num" min="1">
        <input type="submit" value="Submit" name="btn_submit">
    </form>
    <?php 
        //FORM HANDLING
        if( isset($_POST["btn_submit"]) )
        {
            //INPUT
            $num = $_POST["num"];
            //for loop
            for($counter = 1; $counter <= $num; $counter++){
                echo "<span style='margin-right:10px;'>$counter</span>";
            }
        }
    ?>
</body>
</html>