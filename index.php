<?php
    require_once "./blocs/header.php";
    require_once "./data.php";
    foreach ($data as $news):
        if ($news['status'] == true):
    ?>
    <div style="background-color: #4f5a89; width: 30%; padding: 30px; margin: 30px; color: white">
        <img style='width: 100%; height:30%; object-fit: cover; object-position: 50% 30%' src="<?=$news['img']?>">
        <h3><?=$news['title']?></h3>
        <p><?=$news['date']?></p>
        <p><?=$news['content']?></p>
    </div>
<?php
    endif;
    endforeach;
    require_once "./blocs/footer.php"
?>

