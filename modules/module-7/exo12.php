<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            if($_GET['sexe'] == 'M'){
                echo 'Bonjour Monsieur ' . $_GET['nom'];
            }else{
                echo 'Bonjour Madame ' . $_GET['nom'];
            }
        ?>
    </body>
</html>