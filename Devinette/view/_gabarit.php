<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Mes Devinettes</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>style.css?<?php echo time(); ?>">
    
</head>
<body>
<header>
    <nav>
        <div class="nav-item">
            <a href="#">
                <i class="material-icons">camera_alt</i>
                <h1>Devinettes</h1>
            </a>
        </div>
        <div class="nav-item">
            <input id="input-search" type="text" placeholder="Rechercher une devinette">
        </div>
        <div class="nav-item end-row"> 
            <button>
                <a href="edit.php">Ajouter une devinette</a>
            </button> 
            <a href="#" title="Favoris"> 
                <i class="material-icons">star_border</i>
            </a> 
            <a href="#" title="Profil"> 
                <i class="material-icons">person_outline</i>
            </a> 
        </div>
    </nav>    
</header>
<!-- <div id="container"> -->
    <?php
        echo $content;
    ?>
</body>
</html>