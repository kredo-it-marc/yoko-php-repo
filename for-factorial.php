<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Factorial</title>
</head>
<body>
    <div class="container">
        <div class="w-25 mx-auto mt-5">
            <?php
                //FORM HANDLING
                if( isset($_POST["btn_submit"]) ){
                    //INPUT
                    $num = $_POST["number"];
                    $factorial = 1;

                    //PROCESS & OUTPUT
                    if( $num == 0 )
                    {
                        echo "<p class='text-center'>The factorial of $num is $factorial</p>";
                    }
                    else{
                        for($i = $num; $i >=1; $i--){
                            $factorial *= $i; // $factorial = $factorial * $i;
                        }
                        echo "<p class='text-center'>The factorial of $num is $factorial</p>";
                    }
                }
            ?>
            <form action="" method="post">
                <label for="number" class="form-label">Number</label>
                <input type="number" class="form-control mb-3" name="number" id="number" min="0">
                <input type="submit" value="Submit" name="btn_submit" class="btn btn-success w-100">
            </form>
        </div>
    </div>
</body>
</html>