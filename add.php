<?php

    // if (isset($_GET['submit'])){
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['specifications'];
    // }

    include('config/db_connect.php');

    $email = $title = $specifications = '';
    $errors = array('email' => '', 'title' => '', 'specifications' => '' );

    if (isset($_POST['submit'])){

        //email
        if(empty($_POST['email'])){
            $errors['email'] = 'Email field is reaquired <br />';
        } else {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'enter a valid email address';
            }
        }

        //title
        if(empty($_POST['title'])){
            $errors['title'] = 'Title is required <br />';
        } else {
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z0-9\s]+$/', $title)){
                $errors['title'] = 'Title must be lettters or numbers and spaced only';
            }
        }

        //specifications
        if(empty($_POST['specifications'])){
            $errors['specifications'] = 'At least one specification is required <br />';
        } else {
            $specifications = $_POST['specifications'];
            if(!preg_match('/^([a-zA-Z0-9\s]+)(,\s*[a-zA-Z0-9\s]*)*$/', $specifications)){
                $errors['specifications'] = 'comma separated list';
            }
        }

        //submitting the form and checking for errors
        if(array_filter($errors)){
            //echo 'errors in the form';
        } else {
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $specifications = mysqli_real_escape_string($conn, $_POST['specifications']);

            //create sql
            $sql = "INSERT INTO phones(title, email, specifications) VALUES('$title', '$email', '$specifications')";

            //save to db and check
            if(mysqli_query($conn, $sql)){
                //success
                header('Location: index.php');
            } else {
                //error
                echo 'query error: ' . mysqli_error($error);
            }

            //redirecting to the homepage
            //echo 'form is valid';
            // header('Location: index.php');
        }
    }


?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php')?>

<section class="container grey-text">
    <h4 class="center">Add a phone</h4>
    <form class="white" action="add.php" method="POST">
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email)?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>
        <label>iPhone type:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title)?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>
        <label>Specifications (comma separated):</label>
        <input type="text" name="specifications" value="<?php echo htmlspecialchars($specifications)?>">
        <div class="red-text"><?php echo $errors['specifications']; ?></div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php include('templates/footer.php')?>


</html>