<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php

            echo 'Vous avez tué :';
            echo '<ul> <li>'.$_GET['poules'].' poules</li> <li>'.$_GET['cochons']. ' cochons</li>  <li>'.$_GET['vaches']. ' vaches</li>  <li>'.$_GET['amis']. ' amis</li> </ul>';
            $perdus = $_GET['poules']*1 + $_GET['cochons']*3 + $_GET['vaches']*5 + $_GET['amis']*10;

            echo 'Vous avez donc perdu: ' .$_GET['poules'].'*1 + ' .$_GET['cochons']. '*3 + ' .$_GET['vaches']. '*5 + ' .$_GET['amis']. '*10 = ' .$perdus. '<br>';
            $permis = floor($points / 100 < 1);
            if($permis < 1){
                echo "<span>Votre permis est encore valide, mais attention !</span>";
            }else{
                echo '<span> Vous avez perdu ' .$permis. ' permis , vous devez payer ' .($permis*1000). ' Euros pour en avoir un nouveau. Ou mieux... Arrêtez vos bêtises </span>';
            }
        ?>
    </body>
</html>