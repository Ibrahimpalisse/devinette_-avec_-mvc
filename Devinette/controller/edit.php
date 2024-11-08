<?php 
    include_once("_config.php");
    include_once("_head.php");
    include_once("_header.php");
?>

<div id="container">
    <?php if ($devinette['id']): ?>
        <h2>Modifier une devinette</h2>
    <?php else: ?>
       <h2>Ajouter une devinette</h2>
    <?php endif; ?>

    <form action="update.php" method="post">
        <?php if ($devinette['id']): ?>
            <input type="hidden" name="value[id]" value="<?php echo htmlspecialchars($devinette['id'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"/>
        <?php endif; ?>

        Titre : <input type="text" name="value[name]" value="<?php echo htmlspecialchars($devinette['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"/><br/>
        Question : <input type="text" name="value[question]" value="<?php echo htmlspecialchars($devinette['question'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"/><br/>
        Réponse : <input type="text" name="value[answer]" value="<?php echo htmlspecialchars($devinette['answer'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"/><br/>
        <input type="submit" name="submit" value="ajouter"/>
    </form>
</div>

<?php include_once("_footer.php"); ?>


