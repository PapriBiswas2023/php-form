<?php include('dbconn.php');?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>from</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <form action="form-process.php" method="post" enctype="multipart/from-data">
            <label>Name</label>
            <input placeholder="name" type="text" id="name" name="name"><br>
            <label for="age">Age</label>
           <input type="number" id="age" name="age" placeholder="age"><br>
           <label for="dsg">Designation</label>
           <select name="dsg" id="dsg">
            <option value="">Select Designation</option>
            <?php 
            $sql = "SELECT dsg FROM organization";
            $query = mysqli_query($conn, $sql);

            if (!$query) {
                die("Query failed: " . mysqli_error($conn));
            }

            $num = mysqli_num_rows($query);
            if($num > 0)
            {
                while($row = mysqli_fetch_assoc($query))
                {
                    echo "<option value='" . $row["dsg"] . "'>" . $row["dsg"] . "</option>";
                }
            } else {
                echo "<option value=''>No designations available</option>";
            }
            ?>
          </select>
          <br>
          <label for="orgid">Organization</label>
          <select name="orgid" id="orgid">
            <option value="">Select organization</option>
           

          </select>
           <br>
           <label>Upload Image</label>
           <input type="file" id="photo" placeholder="upload image"><br>
           <button type="submit">Submit</button>
        </form>
        
        <script>
            $(document).ready(function() {
                $('#dsg').change(function() {
                    var designation = $(this).val();
                    if (designation) {
                        $.ajax({
                            type: 'POST',
                            url: 'fetch-organizations.php',
                            data: 'dsg=' + designation,
                            success: function(html) {
                                $('#orgid').html(html);
                            }
                        });
                    } else {
                        $('#orgid').html('<option value="">Select Organization</option>');
                    }
                });
            });
        </script>
    </body>
</html>