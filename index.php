<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include 'modules/header.php';
?>
    <article class="row">
        <div class="column medium-8 medium-centered">
            <?php
                $content = getContent('content');
                var_dump($content);
            ?>
        </div>
    </article>
<?php include 'modules/footer.php'; ?>
