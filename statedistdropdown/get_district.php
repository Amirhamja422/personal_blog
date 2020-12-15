<?php
require_once("config.php");
if(!empty($_POST["state_id"])) 
{
$query =mysqli_query($con,"SELECT * FROM districts WHERE StCode = '" . $_POST["state_id"] . "'");
?>
<option value="">Select District</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["DistrictName"]; ?>"><?php echo $row["DistrictName"]; ?></option>
<?php
}
}
?>
