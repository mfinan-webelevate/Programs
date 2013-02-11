<?php

//define("AURA", 1);

//echo 'Hello, World!<br>';

require_once('include/config.inc.php');
require_once('include/db.inc.php');
require_once('include/queries.inc.php');

$carCollection= getRecords();

print_r($carCollection);
?>
<table border=''>
    <tr>
        <th>Item ID</th>
        <th>Item</th>
        <th>Edit</th>
        <th>Delete</th>        
    </tr>   


<?php
$countCars = sizeof($carCollection);
for($i=0; $i < $countCars; $i++){ ?>
<tr>
    <td><?php echo $i; ?> </td>
    <td><?php echo $carCollection[$i]; ?></td>
    <td><a href="editrecord.php?id=<?php echo $i; ?>">Edit</a></td>
    <td><?php echo $i; ?></td>
</tr>
<?php } ?>

</table>