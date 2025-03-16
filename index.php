<?php
$images = [
    "https://www.giantbomb.com/a/uploads/scale_super/1/17245/1139521-ep2_outland_010000.jpg",
    "https://www.giantbomb.com/a/uploads/scale_super/1/17245/1139524-ep2_outland_010003.jpg",
    "https://www.giantbomb.com/a/uploads/scale_super/1/17245/1139584-l4d_hospital02_subway0005.jpg",
    "https://www.giantbomb.com/a/uploads/scale_super/1/17245/1139522-ep2_outland_010001.jpg"
];
$duplicateImages = array_merge([$images[count($images) - 1]], $images, [$images[0]]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="carousel-container">
        <button id="prevBtn">&#10094;</button>
        <div class="carousel">
            <div class="carousel-track">
                <?php foreach ($duplicateImages as $image) : ?>
                    <img src="<?= $image ?>" alt="Image">
                <?php endforeach; ?>
            </div>
        </div>
        <button id="nextBtn">&#10095;</button>
        <div class="carousel-dots">
            <?php foreach ($images as $i => $image) : ?>
                <span class="dot" data-index="<?= $i ?>"></span>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>