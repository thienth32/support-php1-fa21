<?php
$file = $_FILES['image'];
$name = $_POST['name'];

$filename = "uploads/" . $file['name'];
move_uploaded_file($file['tmp_name'], "../" . $filename);

// tạo kết nối đến db
$connect = new PDO("mysql:host=127.0.0.1;dbname=support_php1;charse=utf8", "root", "12345678");
$insertNewSlide = "insert into slides 
                        (name, image_url)
                    values ('$name', '$filename')";

// var_dump($insertNewSlide);die;
$stmt = $connect->prepare($insertNewSlide);
$stmt->execute();

header('location: gallery.php');



?>