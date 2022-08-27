<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Cube</title>
</head>
<body>
    <div class="container">
        <div class="w-25 mx-auto mt-5">
            <?php
                //FORM HANDLING
                if( isset($_POST["btn_submit"]) ){
                    //INPUT
                    $num = $_POST["number"];
                    $cube = $num;

                    for($i = 1; $i<3; $i++){
                        $cube *= $num; //$cube = $cube * $num;
                    }
                    echo "<p class='text-center'>The cube of $num is $cube</p>";
                }
            ?>
            <form action="" method="post">
                <label for="number" class="form-label">Number</label>
                <input type="number" class="form-control mb-3" name="number" id="number">
                <input type="submit" value="Submit" name="btn_submit" class="btn btn-success w-100">
            </form>
        </div>
    </div>
</body>
</html>