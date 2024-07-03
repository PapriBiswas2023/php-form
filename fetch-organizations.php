<?php
include('dbconn.php');

if (isset($_POST['dsg'])) {
    $desg = $_POST['dsg'];
    $sql = "SELECT orgname FROM organization WHERE dsg='$desg'";
    $query = mysqli_query($conn, $sql);

    if (!$query) {
        die("Query failed: " . mysqli_error($conn));
    }

    $num = mysqli_num_rows($query);
    if($num > 0) {
        echo "<option value=''>Select Organization</option>";
        while($row = mysqli_fetch_assoc($query)) {
            echo "<option value='" . $row["orgname"] . "'>" . $row["orgname"] . "</option>";
        }
    } else {
        echo "<option value=''>No organizations available</option>";
    }
}
?>
