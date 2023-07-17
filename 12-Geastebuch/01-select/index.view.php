<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gästebuch</title>
    <link rel="stylesheet" href="/12-Geastebuch/01-select/styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <h1 class="guestbook-heading">Gästebuch</h1>

        <form method="POST" action="./submit.php">
                <?php if(isset($errorMessage)): ?>
                    <p><?php echo e($errorMessage); ?></p>
                <?php endif; ?>
            <label class="guestbook-entry-label" for="name">Dein Name</label>
            <input required="required" class="guestbook-entry-input" type="text" id="name" name="name" />

            <label class="guestbook-entry-label" for="name">Title des Eintrags</label>
            <input required="required" class="guestbook-entry-input" type="text" id="title" name="title" />

            <label class="guestbook-entry-label" for="name">Inhalt des Eintrags</label>
            <textarea required="required" rows="4" class="guestbook-entry-input" type="text" id="content" name="content"></textarea>

            <div class="guestbook-form-button">
                <input class="button" type="reset" value="&#10007 Zurücksetzen">
                <input class="button" type="submit" value="&#10004 Absenden">
            </div>
        </form>

        <hr class="guestbook-separator" />
        
        <?php /*
        <pre><?php print_r($entries); ?></pre>
        */?>

        <?php foreach ($entries as $entry): ?>
            <?php
            $paragraphs = explode("\n", $entry['content']);
            $filteredParagraphs = [];
            foreach ($paragraphs as $paragraph) {
                $paragraph = trim($paragraph);
                if (strlen($paragraph) > 0) {
                    $filteredParagraphs[] = $paragraph;
                }
            }
            ?>
            <div class="guestbook-entry">
                <div class="guestbook-entry-header">
                    <h3 class="guestbook-entry-title">
                        <?php echo e($entry['title']); ?>
                    </h3>
                    <span class="guestbook-entry-author">
                        <?php echo e($entry['name']); ?>
                    </span>
                </div>
                <div class="guestbook-entry-content">
                    <?php foreach($filteredParagraphs as $p): ?>
                        <p><?php echo e($p); ?></p>
                    <?php endforeach ?>

                </div>
            </div>
        <?php endforeach ?>


        <?php /*
        <?php var_dump($perPage); ?> 
        <?php var_dump($countTotal); ?>
        */ ?>
        

        <?php
        $numPages =  ceil($countTotal / $perPage);
        //var_dump($numPages);
        ?>

        <?php if($numPages < 1): ?>
            <ul class="guestbook-pagination">
            <?php for($x = 1; $x <= $numPages; $x++ ): ?>
                <li class="guestbook-pagination-li">
                    <a class="guestbook-pagination-a<?php if($x === $currentPage): ?> guestbook-pagination-active<?php endif; ?>" 
                    href="index.php?<?php echo http_build_query(['page' => $x]); ?>"><?php echo e($x); ?></a>
            <?php endfor;?>
                <!-- <li class="guestbook-pagination-li">
                    <a class="guestbook-pagination-a guestbook-pagination-active" href="#">1</a>
                </li>
                <li class="guestbook-pagination-li">
                    <a class="guestbook-pagination-a" href="#">2</a>
                </li>
                <li class="guestbook-pagination-li">
                    <a class="guestbook-pagination-a" href="#">3</a>
                </li>
                <li class="guestbook-pagination-li">
                    <a class="guestbook-pagination-a" href="#">4</a>
                </li> -->
            </ul>
        <?php endif ?>

        <hr class="guestbook-separator">

        <footer class="guestbook-footer">
            <p>Implementiert im PHP</p>
        </footer>
    </div>

</body>

</html>