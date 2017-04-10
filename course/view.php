<?php
/**
 * Created by PhpStorm.
 * User: Abbas
 * Date: 3/31/2017
 * Time: 6:19 PM
 */
require('db.php');
include("auth.php");
include ('dashboard.php')
?>

<body>
<main>

    <div class="container">
    <h2>View Records</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Order.No</th>
            <th>Burst</th>
            <th>Waist</th>
            <th>Hips</th>
            <th>Back Width</th>
            <th>Front chest</th>
            <th>Shoulder</th>
            <th>Neck Size</th>
            <th>Sleeve</th>
            <th>Under Burst</th>
            <th>Wrist</th>
            <th>Upper Arm</th>
            <th>Calf</th>
            <th>Ankle</th>
            <th>Nape to waist</th>
            <th>Waist to hip</th>
            <th>Front shoulder to waist</th>
            <th>Outside Leg</th>
            <th>Inside Legs</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $veiwby =$_SESSION["username"];
        $count=1;
        $sel_query="Select * from new_record WHERE submittedby = '$veiwby' ORDER BY id desc;";
        $result = mysqli_query($con,$sel_query);
        while($row = mysqli_fetch_assoc($result)) { ?>
            <tr><td align="center"><?php echo $count; ?></td>
                <td align="center"><?php echo $row["burst"]; ?></td>
                <td align="center"><?php echo $row["waist"]; ?></td>
                <td align="center"><?php echo $row["hips"]; ?></td>
                <td align="center"><?php echo $row["backwidth"]; ?></td>
                <td align="center"><?php echo $row["frontchest"]; ?></td>
                <td align="center"><?php echo $row["shoulder"]; ?></td>
                <td align="center"><?php echo $row["neck"]; ?></td>
                <td align="center"><?php echo $row["sleeve"]; ?></td>
                <td align="center"><?php echo $row["underburst"]; ?></td>
                <td align="center"><?php echo $row["wrist"]; ?></td>
                <td align="center"><?php echo $row["upperarm"]; ?></td>
                <td align="center"><?php echo $row["calf"]; ?></td>
                <td align="center"><?php echo $row["ankle"]; ?></td>
                <td align="center"><?php echo $row["napewaist"]; ?></td>
                <td align="center"><?php echo $row["waisthip"]; ?></td>
                <td align="center"><?php echo $row["shoulderwaist"]; ?></td>
                <td align="center"><?php echo $row["outsideleg"]; ?></td>
                <td align="center"><?php echo $row["insideleg"]; ?></td>
                <td align="center">
                    <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
                </td>
                <td align="center">
                    <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
                </td>
            </tr>
            <?php $count++; } ?>
        </tbody>
    </table>
</div>
</main>
</body>
</html>