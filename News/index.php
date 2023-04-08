<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> 📰 News Site</title>
</head>
<body>
<h1 style="text-align: center">Yangilik Sayti</h1>
<main style="display: flex; justify-content: center">
    <?php
        require_once "./data.php";
        foreach ($data as $news):
            if ($news['status'] == false):
    ?>
    <div style="font-family: Arial; background-color: #4f5a89; width: 30%; padding: 30px; margin: 30px; color: white">
        <img style='width: 100%; height:30%; object-fit: cover; object-position: 50% 30%' src="<?=$news['img']?>">
        <h3><?=$news['title']?></h3>
        <p><?=$news['date']?></p>
        <p><?=$news['content']?></p>
    </div>
    <?php
        endif;
        endforeach;
    ?>
</main>
</body>
</html>
