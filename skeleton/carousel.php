<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="carousel.css">
    <title>Carousel</title>
</head>

<body>

    <link rel="stylesheet" href="carousel.css">
    <div class="carousel">
        <div class="carousel__photo carousel__photo--show">
            <img src="https://picsum.photos/seed/12/1920/1080" alt="">
        </div>
        <div class="carousel__photo">
            <img src="https://picsum.photos/seed/22/1920/1080" alt="">
        </div>
        <div class="carousel__photo">
            <img src="https://picsum.photos/seed/32/1920/1080" alt="">
        </div>
        <div class="carousel__photo">
            <img src="https://picsum.photos/seed/42/1920/1080" alt="">
        </div>
        <div class="carousel__photo">
            <img src="https://picsum.photos/seed/52/1920/1080" alt="">
        </div>
    </div>
    <div class="carousel__controls">
        <button class="carousel__button--prev">
            <img src="https://www.svgrepo.com/show/16711/right-arrow.svg" alt="">
        </button>
        <button class="carousel__button--next">
            <img src="https://www.svgrepo.com/show/16711/right-arrow.svg" alt="">
        </button>
    </div>
    <script src="carousel.js"></script>
</body>

</html>