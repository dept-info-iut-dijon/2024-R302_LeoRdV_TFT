<?php
?>


<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="public/css/main.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->e($title) ?></title>
</head>

<body>
<header>
    <!-- Menu -->
    <nav>
        <form action="index.php" method="get">
            <input type="submit" value="index" name="action">
            <input type="submit" value="add-unit" name = "action">
            <input type="submit" value="add-type-origin" name="action">
            <input type="submit" value="search" name="action">
        </form>
        
    </nav>
</header>
<!-- #contenu -->
<main id="contenu">
<?=$this->section('content')?>
</main>
<footer>

</footer>
</body>

</html>