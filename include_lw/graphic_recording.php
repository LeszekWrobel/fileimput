<?php
// Script written by Adam Khoury for the following video exercise:
// http://www.youtube.com/watch?v=7fTsf80RJ5w
// Skrypt zapisuje przesłane formularzem zdjęcia w katalogu img/
if(isset($_FILES['images'])){
    $name_array = $_FILES['images']['name'];
    $tmp_name_array = $_FILES['images']['tmp_name'];
    $type_array = $_FILES['images']['type'];
    $size_array = $_FILES['images']['size'];
    $error_array = $_FILES['images']['error'];
    for($i = 0; $i < count($tmp_name_array); $i++){
        if(move_uploaded_file($tmp_name_array[$i], "uploads/".$name_array[$i])){
            echo $name_array[$i]." Upload is complete.<br>";
        } else {
            echo "move_uploaded_file function failed for ".$name_array[$i]."<br>";
        }
    }
}
?>
