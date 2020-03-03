<?php

$email = $title = $ingredients = '';
$errors = array('email'=>'', 'title'=>'', 'ingredients'=>'');

    // form validation
    if(isset($_POST['submit'])) {

        // check email
        if(empty($_POST['email'])) {
            $errors['email'] = 'An email is requqired <br />';
        } else {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'email must be a valid email address.';
            }
        }

        // check title
        if(empty($_POST['title'])) {
            $errors['title'] = 'A title is requqired <br />';
        } else {
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
                $errors['title'] = 'Title must be letter and spaces only.';
            }
        }

        // check ingredients
        if(empty($_POST['ingredients'])) {
            $errors['ingredients'] = 'At least one ingredient is required <br />';
        } else {
            $ingredients = $_POST['ingredients'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
                $errors['ingredients'] = 'Ingredients must be a comma separated list.';
            }
        }

    } // end of form validation

?>

<!DOCTYPE html>
<html lang="en">
    <?php include('templates/header.php'); ?>

    <section class="container grey-text">
        <h4 class="center">Add Pizza</h4>
        <form action="add.php" method="POST" class="white">
            <label for="">Your Email</label>
            <input type="text" name="email" value="<?php echo $email ?>">
            <div class="red-text"><?php echo $errors['email'] ?></div>
            <label for="">Pizza Title</label>
            <input type="text" name="title" value="<?php echo $title ?>">
            <div class="red-text"><?php echo $errors['title'] ?></div>
            <label for="">Ingredients (coma separated):</label>
            <input type="text" name="ingredients" value="<?php echo $ingredients ?>">
            <div class="red-text"><?php echo $errors['ingredients'] ?></div>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php'); ?>
    
</body>
</html>