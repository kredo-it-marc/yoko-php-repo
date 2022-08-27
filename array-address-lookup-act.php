<?php
    $contacts = [
        ["id"=>1, "name"=>"Yoko Fujita","address"=>"Japan"],
        ["id"=>2,"name"=>"John Doe", "address"=>"USA"],
        ["id"=>3,"name"=>"Marc Albaran", "address"=>"Philippines"],
        ["id"=>4,"name"=>"Yoko Fujita", "address"=>"South Korea"]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>The Green Pages</title>
</head>
<body>
    <div class="container">
        <?php
            //FORM HANDLING
            if(isset($_POST["btn_submit"]))
            {
                //INPUT
                $contact = $_POST["contact"];
                $contact_details = [];

                //PROCESS
                foreach($contacts as $arr){
                    if($contact == $arr["id"])
                    {
                        $contact_details = $arr;
                    }
                }

                //OUTPUT
                if(count($contact_details)!=0)
                {
        ?>
                    <div class="mx-auto mt-5 w-25 text-center">
                        <h1><?= $contact_details["name"]?></h1>
                        <h3><?= $contact_details["address"]?></h3>
                    </div>
        <?php
                }
            }
        ?>
        <div class="card mt-5 mx-auto w-25">
            <div class="card-header">
                <h1 class="card-title">The Green Pages</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="contact">Contacts</label>
                    <select name="contact" id="contact" class="form-select mb-3">
                        <option selected disabled>Select a contact</option>
                        <?php
                            foreach($contacts as $arr){
                        ?>
                                <option value="<?= $arr["id"]?>"><?= $arr["name"]?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <input type="submit" value="Submit" class="btn btn-success w-100" name="btn_submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>