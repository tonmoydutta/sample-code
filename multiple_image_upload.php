<?php
$total = count($_FILES['file']['name']);

if($total>0)
{
$id = uniqid();
$todir = 'uploads/';

for ($i = 0; $i < count($_FILES["file"]["name"]); $i++) {
$filename[]=$id.basename($_FILES['file']['name'][$i]);



move_uploaded_file($_FILES['file']['tmp_name'][$i], $todir.$id.basename($_FILES['file']['name'][$i])); 


}

$filename_array=implode(",",$filename);

}




?>