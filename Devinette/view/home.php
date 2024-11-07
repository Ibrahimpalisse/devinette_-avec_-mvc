<div id="container">
    <h2>Liste des devinettes</h2>

    <?php 
        foreach($devinettes as $devinette) : 
    ?>
            <div class="question">
                <h3>
                    <?php echo htmlspecialchars($devinette['name']); ?>
                </h3>
                <?php echo htmlspecialchars($devinette['question']); ?>
                <hr/>
                <button style="">
                    <a  href="edit.php?id=<?php echo $devinette['id']; ?>">
                        Modifier
                    </a>
                </button>
                <button style="">
                    <a href="delete.php?id=<?php echo $devinette['id']; ?>">
                        Supprimer
                    </a>
                </button>
                <button class="showAnswer">
                    Voir la réponse
                </button>
                <div class="divAnswer" style="display: none;">
                    <?php echo htmlspecialchars($devinette['answer']); ?>
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