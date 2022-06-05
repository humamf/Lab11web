<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>

    <section id="hero">
        <h1>Hello World</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime laudantium harum optio molestiae quisquam, voluptates saepe deserunt, nam quas suscipit iure, a magni nihil cum temporibus earum? Aspernatur, iste cum?</p>
        <a href="home.html" class="btn btn-large">Learn more &raquo;</a>
    </section>
    <section id="wrapper">
        <section id="main">
            <div class="row">
                <div class="box">
                    <img src="https://dummyimage.com/120/db7d25/fff.png" alt="" class="image-circle">
                    <h3>Heading</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, dignissimos?</p>
                    <a href="#" class="btn btn-default">View detail</a>
                </div>
                <div class="box">
                    <img src="https://dummyimage.com/120/3e73e6/fff.png" alt="" class="image-circle">
                    <h3>Heading</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, dignissimos?</p>
                    <a href="#" class="btn btn-default">View detail</a>
                </div>
                <div class="box">
                    <img src="https://dummyimage.com/120/71e6d4/fff.png" alt="" class="image-circle">
                    <h3>Heading</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, dignissimos?</p>
                    <a href="#" class="btn btn-default">View detail</a>
                </div>
            </div>
        <hr class="divider" />
        <article class="entry">
                <h2>First featurette heading</h2>
            <img src="https://dummyimage.com/150/7b8a70/fff.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias maxime sit assumenda eos, numquam ea animi? Quidem temporibus nulla odit, aspernatur unde repellat quae cumque?</p>
        </article>    
        <hr class="divider" />
        <article class="entry">
            <h2>First featurette heading</h2>
            <img src="https://dummyimage.com/150/7b8a70/fff.png" alt="" class="right-img">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias maxime sit assumenda eos, numquam ea animi? Quidem temporibus nulla odit, aspernatur unde repellat quae cumque?</p>
        </article>    
        </section>
    </section>

    <?= $this->include('template/footer'); ?>
</body>
</html>