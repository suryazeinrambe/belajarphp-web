<?php 

    if($_SERVER['REQUEST_METHOD']=='POST'){

        $file_name =  $_FILES["upload_file"]["name"];
        $file_path = $_FILES["upload_file"]["full_path"];
        $file_type = $_FILES["upload_file"]["type"];
        $tmp_name  = $_FILES["upload_file"]["tmp_name"];
        $error = $_FILES["upload_file"]["error"];
        $size = $_FILES["upload_file"]["size"];
            // $_FILES = '';
            // var_dump($_FILES);
        move_uploaded_file($tmp_name,__DIR__ . "/file/" . $file_name);

    }
   
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if($_SERVER['REQUEST_METHOD']=='POST') { ?>
        <table>
            <tr>
                <td>File Name : </td>
                <td><?= $file_name ?></td>
            </tr>
            <tr>
                <td>File Type : </td>
                <td><?= $file_type ?></td>
            </tr>
            <tr>
                <td>File Path : </td>
                <td><?= $file_path ?></td>
            </tr>
            <tr>
                <td>Temporay Name : </td>
                <td><?= $tmp_name ?></td>
            </tr>
            <tr>
                <td> Error  : </td>
                <td><?= $error ?></td>
            </tr>
        </table>
    <?php }?>

    <h1>Upload Foto </h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label>
            File : 
            <input type="file" name="upload_file">
        </label>
        <input type="submit" value="Upload">
    </form>

    
    
</body>
</html>