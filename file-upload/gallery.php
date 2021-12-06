<?php
// lấy dữ liệu từ csdl
$getSlideQuery = "select * from slides";
$connect = new PDO("mysql:host=127.0.0.1;dbname=support_php1;charse=utf8", "root", "12345678");

$stmt = $connect->prepare($getSlideQuery);
$stmt->execute();
$slides = $stmt->fetchAll();

?>

<?php foreach ($slides as $item): ?>
    <div>
        <img src="<?= '../' . $item['image_url'] ?>" width="250">
        <br>
        <p><?= $item['name']?></p>
    </div>
<?php endforeach ?>