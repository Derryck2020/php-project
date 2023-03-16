<?php
// //connecting to database
// $conn = mysqli_connect('localhost', 'derryck', 'has2020gone', 'iPhones-stores');

// //checking connection 
// if(!$conn){
//     echo 'Connection error: ' . mysqli_connect_error();
// }

include('config/db_connect.php');


//query for all phones
$sql = 'SELECT title, specifications, id FROM phones ORDER BY created_at';

//make query & get result
$result = mysqli_query($conn, $sql); //result not in a format we can use

//fetch the resulting rows as an array
$phonez = mysqli_fetch_all($result, MYSQLI_ASSOC); //format we can use

//free result from memory
// $mysqli_free_result($result);

//close connection
mysqli_close($conn);

// print_r($phonez);

// print_r(explode(',', $phonez[0]['specifications']));


?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php')?>

<h4 class="center grey-text">iPHONES HUB</h4>

<div class="container">
    <div class="row">

        <?php foreach ($phonez as $key => $phone) { ?>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($phone['title']);?></h6>
                        <ul>
                            <?php foreach (explode(',', $phone['specifications']) as $spec) { ?>
                                <li><?php echo htmlspecialchars($spec) ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="card-action right-align">
                        <a href="#" class="brand-text">more info</a>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>
</div>

<?php include('templates/footer.php')?>


</html>