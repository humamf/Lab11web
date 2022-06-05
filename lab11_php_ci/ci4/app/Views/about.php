<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>

    <section id="about">
        <div class="bio">
            <img src="humam.JPG" alt="" >
            <h2>Humam Fathurrahman</h2>
            <p class="p-bio">Perkenalkan saya Humam Fathurrahman, saya sedang belajar memahami HTML, CSS, dan JS</p>
        </div>
    </section>

    <?= $this->include('template/footer'); ?>
</body>
</html>