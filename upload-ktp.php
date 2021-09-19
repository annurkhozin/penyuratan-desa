<?php
$targetDir = "uploads/";
if(!empty($_FILES)){
    $fileName = round(microtime(true) * 1000) ."_". str_replace(' ', '_', basename($_FILES["file"]["name"]));
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
    echo $fileName;
}
?> 