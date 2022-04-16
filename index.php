<form action="index.php" method="post">
    EnterName::<input type="text" name="name">

    <input type="submit" name="btn">

    <?php

    $db = mysqli_connect('localhost', 'root', '', 'testing');

    if (isset($_POST['btn'])) 
    {
        $name=$_POST['name'];
        $q="INSERT INTO name(n_id, name)VALUES('$name)";

        if(mysqli_query($db, $q))
        {
            //echo "data is fatch...";
        }
        else
        {
            //echo "data is not fatch...";
        }
    }
    
    ?>

    <!-- <p><?php echo $name ?></p> -->
</form>
