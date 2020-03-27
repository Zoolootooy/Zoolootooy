<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
    <style>
        .mAdvert__img{
            width: 100px;
        }
    </style>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>

    <form action="application/views/edit_view.php" method="get">
        <button type="submit">Create new advert</button>
    </form>

    <?php foreach ($adverts as $advert):?>

        <div class="mAdvert">
            <h2>
                <a href="<?= "application/controllers/controller_advert.php?id=" . $advert['id']?>" methods="get"><?= $advert['title'];?></a>
                <a href="" methods="get">
                    <i class='fas fa-edit'></i>
                </a>
            </h2>

            <p><?= $advert['description'];?></p>
            <p><?= $advert['create_date'];?></p>
            <img class="mAdvert__img" src="/images/<?= $advert['photo'];?>">
        </div>
        <br><br>

    <?php endforeach;?>

</body>
</html>