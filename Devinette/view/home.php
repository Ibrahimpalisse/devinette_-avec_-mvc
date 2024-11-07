<div id="container">
    <h2>Liste des devinettes</h2>

    <?php 
        foreach($devinettes as $devinette) : 
    ?>
            <div class="question">
                <h3>
                    <?php echo htmlspecialchars($devinette->getName()); ?>
                </h3>
                <?php echo htmlspecialchars($devinette->getQuestion()); ?>
                <hr/>
                <button style="">
                    <a  href="edit.php?id=<?php echo $devinette->getId(); ?>">
                        Modifier
                    </a>
                </button>
                <button style="">
                    <a href="delete.php?id=<?php echo $devinette->getId(); ?>">
                        Supprimer
                    </a>
                </button>
                <button class="showAnswer">
                    Voir la réponse
                </button>
                <div class="divAnswer" style="display: none;">
                    <?php echo htmlspecialchars($devinette->getAnswer()); ?>
                </div>
            </div>
    <?php 
        endforeach;
    ?>
</div>

<script type="text/javascript">
    $(".showAnswer").click(function(event) {
        event.preventDefault(); 
        $(this).next(".divAnswer").toggle(); 
    });
</script>