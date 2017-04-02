<?php
/**
 * Created by PhpStorm.
 * User: Abbas
 * Date: 3/31/2017
 * Time: 6:19 PM
 */
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>View Records</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
    <p><a href="index.php">Home</a>
        | <a href="insert.php">Insert New Record</a>
        | <a href="logout.php">Logout</a></p>
    <h2>View Records</h2>
    <table width="100%" border="1" style="border-collapse:collapse;">
        <thead>
        <tr>
            <th><strong>S.No</strong></th>
            <th><strong>Name</strong></th>
            <th><strong>Age</strong></th>
            <th><strong>Edit</strong></th>
            <th><strong>Delete</strong></th>
        </tr>
        </thead>
        <tbody>
        <?php
        $count=1;
        $sel_query="Select * from new_record ORDER BY id desc;";
        $result = mysqli_query($con,$sel_query);
        while($row = mysqli_fetch_assoc($result)) { ?>
            <tr><td align="center"><?php echo $count; ?></td>
                <td align="center"><?php echo $row["burst"]; ?></td>
                <td align="center"><?php echo $row["waist"]; ?></td>
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
</body>
</html>