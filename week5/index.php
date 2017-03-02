

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>the 1st php</title>

</head>
<body>


<?php

$provisionedActivity = array("sting Specs","Mugs","Sausage Rolls");

foreach ($provisionedActivity as $x){
    print "<p>$x</p>";
}


echo$provisionedActivity[0];

$provisionedActivity[2]="hugs";

unset($provisionedActivity[3]);


for($s= 1;$s<10;$s++)
{
    echo"<p>hello</p>";
}


?>



</body>
</html>