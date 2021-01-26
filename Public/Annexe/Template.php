<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Public/fontawesome/css/all.css">
        <link rel="stylesheet" href="Public/fontawesome/js/all.min.css">
        <script src="Public/bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="Public/bootstrap/css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&family=Open+Sans:wght@700;800&family=PT+Sans:ital,wght@1,400;1,700&family=Shadows+Into+Light&family=Ubuntu:wght@500&display=swap" rel="stylesheet">        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&family=Montserrat+Alternates:ital,wght@1,800&family=Open+Sans:wght@700;800&family=PT+Sans:ital,wght@1,400;1,700&family=Shadows+Into+Light&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Public/Css/StyleBatela.css">

        <title> <?= $Title ?> </title>
    </head>
    <body>
        <header id="Header">
            <!-- <h1 id="TitleSite"> Batela </h1>
            <?php // $Menu?> -->
            <div class="container">
                <div class="row">
                    <nav class="col navbar navbar-expand-lg navbar-light">
                        <h1 id="TitleSite"> Batela </h1>
                        <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="navbarContent" class="col-6 col-lg-12 collapse navbar-collapse">
                            <?= $Menu ?>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <section id="Sec1">
            <?= $Contenu ?>
        </section>
        
        <footer id="Footer">
            <div id="SecondPartie">
                <?php require_once("MenuFooter.php");?>
            </div>
        </footer>
        <script src="Public/Js/ScriptBatela.js"></script>
    </body>
</html>