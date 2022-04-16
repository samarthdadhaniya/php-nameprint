<form  method="post">
Enter the Name:
<input type="text" name="name" value=""></br>
<input type="submit"  name="btn" value="Submit">
</form>

<?php
include_once "database.php";
mysqli_select_db($con,"samarth");

if(isset($_POST['btn']))
{
    $n=$_POST['name'];
    $q="insert into st_master values('$n')";
    if( mysqli_query($con,$q))
    {
        //echo "insert into st_master";

    }
    else
    {
        //echo "not insert into st_master";
    }
}
?>



                
<div class="container">
    <div class="col-lg-12">
    </br>
        <!-- <h1 class="text-warning text-center">contact us table</h1> -->
        <table class="table table-hover">
            <tr class="bg-dark text-white">
                
                <th>name</th>
                
            </tr>
            <?php
                    include('database.php');
                    
                    $q= "select * from st_master";
                    $query = mysqli_query($con,$q);
                    while($rel = mysqli_fetch_array($query))
                    {      
            ?>
            <tr>
                
                <td><?php echo $rel['name']; ?></td>
                
            </tr>
            <?php
                    }
            ?>
        </table>
    </div>
    </div>

        </div>
    </div>

    
    
    
    


<?php
include('database.php');


    $n1=@$_POST['name'];
    

    $q= "select * from st_master";

    $query = mysqli_query($con,$q);

?>