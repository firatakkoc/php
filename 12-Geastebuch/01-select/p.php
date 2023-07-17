<?php



// echo nl2br(e($content));

// var_dump(explode("\n", $content));

// $paragraphs = explode("\n", $content);

// echo '<p>' . implode('</p><p>',$paragraphs) . '</p>';

require __DIR__.'/inc/functions.php';

$content = "Hallo Welt\n\n\nHallo Mars!";

$paragraphs = explode("\n", $content);
$filteredParagraphs = [];
foreach ($paragraphs as $paragraph) {
    $paragraph = trim($paragraph);
    if (strlen($paragraph) > 0) {
        $filteredParagraphs[] = $paragraph;
    }
}

var_dump($filteredParagraphs);

?>

<?php foreach($filteredParagraphs as $p): ?>
    <p> <?php echo e($p); ?> </p>

    <?php endforeach; ?>


