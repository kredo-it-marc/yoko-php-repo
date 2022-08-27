<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Quiz Calculater</title>
</head>
<body>
    <div class="container">
        <div class="card w-25 mx-auto mt-5">
            <div class="card-header">
                <h1 class="card-title">Quiz Calculator</h1>
            </div>
            <div class="card-body">
                <?php
                    //FORM HANDLING
                    if( isset($_POST["btn_calculate"]))
                    {
                        //INPUT
                        $scores = $_POST["score"];
                        $array_size = count($scores);
                        $sum =0;

                        //PROCESS
                        for($i=0; $i<=$array_size; $i++)
                        {
                            $sum += $scores[$i]; 
                        }

                        $average = $sum / $array_size;
                ?>
                        <div class="alert alert-success" role="alert">
                            The average score is <?= $average?>
                        </div>
                <?php
                    }
                ?>
                <form action="" method="post">
                    <label for="num-quizzes" class="form-label">Enter number of quizzes</label>
                    <input type="number" name="num_quizzes" id="num-quizzes" min="1" class="form-control mb-3">
                    <input type="submit" value="Submit" name="btn_submit" class="btn btn-success w-100">
                </form>
                <?php
                    //FORM HANDLING
                    if( isset($_POST["btn_submit"]) )
                    {
                        //INPUT
                        $num_quizzes = $_POST["num_quizzes"];

                        //LOOP - display input fields
                ?>
                    <form action="" method="post">
                        <p>Enter scores for each quiz</p>
                        <?php
                            for($i=1; $i<= $num_quizzes; $i++)
                            {
                        ?>
                                <label for="score" class="form-label">Quiz <?= $i?></label>
                                <input type="number" name="score[]" id="score" min="0" class="form-control mb-3">
                        <?php
                            }
                        ?>
                        <input type="submit" value="Calculate" name="btn_calculate" class="btn btn-primary w-100">
                    </form>
                <?php        
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>