<?php

$censured_word = $_GET["censured"];
$paragraph = $_GET["paragraph"];

$new_paragraph = str_replace($censured_word, "***", $paragraph);

$paragraph_length = strlen($paragraph);
$new_paragraph_length = strlen($new_paragraph);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container text-center mt-5">
        <div class="censured-paragraph border-bottom">
            <h1>Paragrafo censurato</h1>
            <p class="fs-3"><?php echo $new_paragraph ?></p>
            <p>La lunghezza di questo paragrafo e di: <?php echo $new_paragraph_length ?></p>
        </div>
        <div class="paragraph mt-5 border-bottom">
            <h1>Paragrafo Originale</h1>
            <p class="fs-3"><?php echo $paragraph ?></p>
            <p>La lunghezza di questo paragrafo e di: <?php echo $paragraph_length ?></p>
        </div>
    </div>

</body>

</html>