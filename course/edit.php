<?php
/**
 * Created by PhpStorm.
 * User: Abbas
 * Date: 3/31/2017
 * Time: 6:23 PM
 */
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from new_record where id='".$id."'";
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<?php include ("dashboard.php"); ?>
<body>

    <h1>Update Record</h1>
    <?php
    $status = "";
    if(isset($_POST['new']) && $_POST['new']==1)
    {
        $id=$_REQUEST['id'];
        $trn_date = date("Y-m-d H:i:s");
        $name =$_REQUEST['name'];
        $age =$_REQUEST['age'];
        $submittedby = $_SESSION["username"];
        $update="update new_record set trn_date='".$trn_date."',
name='".$name."', age='".$age."',
submittedby='".$submittedby."' where id='".$id."'";
        mysqli_query($con, $update) or die(mysqli_error());
        $status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
        echo '<p style="color:#FF0000;">'.$status.'</p>';
    }else {
    ?>
    <div>
        <form name="form" method="post" action="">
            <input type="hidden" name="new" value="1" />
            <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
            <p><input type="text" name="burst" placeholder="Enter burst"
                      required value="<?php echo $row['burst'];?>" /></p>
            <p><input type="text" name="waist" placeholder="Enter waist"
                      required value="<?php echo $row['waist'];?>" /></p>
            <p><input type="text" name="hips" placeholder="Enter hips"
                      required value="<?php echo $row['hips'];?>" /></p>
            <p><input type="text" name="backwidth" placeholder="Enter backwidth"
                      required value="<?php echo $row['backwidth'];?>" /></p>
            <p><input name="submit" type="submit" value="Update" /></p>
        </form>
        <?php } ?>
    </div>
</div>
</body>
</html>