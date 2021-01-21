<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Public/Css/StyleBatela.css">
        <link rel="stylesheet" href="Public/fontawesome/css/all.css">
        <link rel="stylesheet" href="Public/bootstrap/css/bootstrap.css">
        <title> <?= $Title ?> </title>
    </head>
    <body>
        <header id="Header">
            <h1 id="TitleSite"> Batela </h1> 
            <?= $Menu ?>
        </header>

        <section id="Sec1">
            
        </section>
        
        <footer id="Footer">
            <div id="SecondPartie">
                <?php require_once("MenuFooter.php");?>
            </div>
        </footer>
        <script src="Public/Js/ScriptBatela.js"></script>
        <script src="Public/bootstrap/bootstrap.js"></script>
    </body>
</html>