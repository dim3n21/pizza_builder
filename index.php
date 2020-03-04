<?php

    // connect to database
    $conn = mysqli_connect('localhost', 'admin2', 'test1234', 'pizza_builder');

    // check connection
    if(!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }

    // write query for all pizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas';

    // make query and get result
    $result = mysqli_query($conn, $sql);

    // fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    print_r($pizzas);
?>

<!DOCTYPE html>
<html lang="en">
    <?php include('templates/header.php'); ?>

    <?php include('templates/footer.php'); ?>
    
</body>
</html>