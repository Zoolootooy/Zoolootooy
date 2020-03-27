<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .curAdvert__img{
            width: 300px;
        }
    </style>

</head>
<body>
    <div class="curAdvert">
        <h2 class="curAdvert__title"><?= $advert[0]['title'] ?></h2>
        <p class="curAdvert__create-date"><?= $advert[0]['create_date'] ?></p>
        <img class="curAdvert__img" src="../../images/<?= $advert[0]['photo'];?>">
        <p class="curAdvert__description"><?= $advert[0]['description'] ?></p>
        <p class="curAdvert__phone"><?= $advert[0]['phone'] ?></p>
        <p class="curAdvert__country"><?= $country[0]['name'] ?></p>
        <p class="curAdvert__email"><?= $advert[0]['email'] ?></p>
    </div>


</body>
</html>