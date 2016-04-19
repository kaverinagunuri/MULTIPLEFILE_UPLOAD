<?php
if(isset($_FILES['upload'])===true)
{
    $files=$_FILES['upload'];
    //print_r($files);
    for($x=0;$x<count($files['name']);$x++)
    {
        $name=$files['name'][$x];
        $tmp_name=$files['tmp_name'][$x];
        move_uploaded_file($tmp_name, 'upload/'.$name);
        
    }
    echo "successfully Uploaded";
}
?>
<html>
    <head>
        <title>
            MULTI-FILE UPLOAD::
        </title>
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="upload[]" multiple>
            
            <input type="submit" value="UPLOAD" name="upload">
        </form>
    </body>
</html>