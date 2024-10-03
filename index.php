<?php
$directory = 'skrin/';

$images = glob($directory . "*.{jpg,png,gif,jpeg}", GLOB_BRACE);
if (count($images) > 0) {
    $randomImages = array_rand($images, 3);
} else {
    // Если изображений нет, можно указать 3 изображения по умолчанию (На всякий)
    $randomImages = ['no-image1.jpg', 'no-image2.jpg', 'no-image3.jpg'];
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Рандомные изображения</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container">
        <?php for ($i = 0; $i < 3; $i++): ?>
            <div class="card" onmouseover="showText(<?php echo $i; ?>)" onmouseout="hideText(<?php echo $i; ?>)">
                <img src="<?php echo $images[$randomImages[$i]]; ?>" alt="Рандомное изображение <?php echo $i + 1; ?>">
            </div>
        <?php endfor; ?>
    </div>
</body>
</html>
