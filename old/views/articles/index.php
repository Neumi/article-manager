<p>All articles:</p>

<?php foreach ($articles as $article) { ?>
    <p>
        <?php echo $article->artikelnummer; ?>
        <?php echo $article->bezeichnung; ?>
        <?php echo $article->einkaufspreis; ?>
        <?php echo $article->verkauspreis; ?>
        <?php echo $article->beschreibung; ?>
        <?php echo $article->erstellungsdatum; ?>

        <a href='?controller=articles&action=show&id=<?php echo $article->id; ?>'>See content</a>
        <a href='?controller=articles&action=deleteEntryById&id=<?php echo $article->id; ?>'>DELETE Article</a>
    </p>
<?php } ?>

