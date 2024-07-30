<!doctype html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title><?= $data ["title"] ?></title>

        <link rel="icon" type="image/png" href="Public/medias/images/logo.png">
        
        <!--lien pour les icones-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
        
        <!--liens pour le fichier css-->
        <link rel="stylesheet" href="Public/styles/style.css" type="text/css" >

        <script src="Public/scripts/main.js" defer></script>
        

    </head>
    <body>

        <?php require_once "header.php"; ?>
        
        <main>
            <?php
                if (isset($view)) {
                    require_once $view;
                }
            ?>
        </main>
        <?php require_once "footer.php"; ?>
        <!-- <a href="#" class ="to__top">
            <i class="fa-solid fa-arrow-up-long"></i>
        </a> -->
    </body>
</html>