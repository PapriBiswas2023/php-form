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
    </head>
    <body>
        <form action="form-process.php" method="post" enctype="multipart/from-data">
            <label>Name</label>
            <input placeholder="name" type="text" id="name" name="name"><br>
            <label for="age">Age</label>
           <input type="number" id="age" name="age" placeholder="age"><br>
           <label for="dsg">Designation</label>
           <select>
            <option value="">Select Designation</option>
           </select>
           <label>Organization</label>
           <select>
            <option value="">Select Organization</option>
           </select>
           <label>Upload Image</label>
           <input type="file" id="photo" placeholder="upload image"><br>
           <button type="submit">Submit</button>
        </form>
        
        <script src="" async defer></script>
    </body>
</html>