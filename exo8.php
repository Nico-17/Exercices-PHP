<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <pre>
            
            <?php
            //Le rectangle
                $i = 2;
            
                echo '<br/>';

                for($e=1;$e<=10;$e++){
                    echo "<span class=\"bg-danger\">*</span>";
                }
                echo '<br/>';

                while ($i<=9){
                    for($f=1;$f!=11;$f++){

                        if($f==1 || $f==10){
            
                            echo "<span class=\"bg-danger\">*</span>";
            
                        }else{
            
                            echo '<span class="bg-warning"> </span>';
            
                        }
                        
                    }$i++;
            
                    echo '<br/>';		
            
                }
            
                for($e=1;$e<=10;$e++){
            
                    echo "<span class=\"bg-danger\">*</span>";
            
                }
                echo '<br>';
                
                
            ?>
            <?php
            //Le carré
                $i = 2;

                echo '<br/>';

                for($e=1;$e<=9;$e++){
                    echo "<span class=\"bg-success\">*</span>";
                }
                echo '<br/>';

                while ($i!=5){
                    for($f=1;$f!=11;$f++){

                        if($f==1 || $f==9){
            
                            echo "<span class=\"bg-success\">*</span>";
            
                        }else{
            
                            echo ' ';
            
                        }
                        
                    }$i++;
            
                    echo '<br/>';		
            
                }
            
                for($e=1;$e<=9;$e++){
            
                    echo "<span class=\"bg-success\">*</span>";
            
                }
                echo '<br>';   
            ?>

            <?php
                //Le losange            
                $ligne_max=17;
                $blanc=8;
                $etoile=1;
                $ligne=1;
                echo "<br>\n";
                for($ligne=1;$ligne<=9;$ligne++){
                    for ($i=0;$i<=$blanc; $i++){
                        echo " ";
                        
                    }
                    for ($j=1;$j<=$etoile; $j++){
                            echo "<span class=\"bg-success\">*</span>";
                    }
                    $etoile +=2;
                    $blanc -= 1;
                    echo "\n";
                }
                $etoile=$ligne_max-2;
                $blanc=2;
                for($ligne=$ligne_max; $ligne>=1; $ligne--){
                    for($i=$blanc; $i>=1; $i--){
                        echo " ";
                    }
                    for($j=$etoile; $j>=1; $j--){
                        echo "<span class=\"bg-success\">*</span>";
                    }
                    $etoile-= 2;
                    $blanc ++;
                    echo "\n";
                }
                echo "<br> \n";
            ?>

            <?php
                //Le Parallélogramme            
                $ligne_max=6;
                $blanc=4;
                $etoile=10;
                $ligne=1;
                echo "<br> \n";
                for($ligne=1;$ligne<=$ligne_max;$ligne++){
                    for ($i=0;$i<=$blanc; $i++){
                        echo " ";
                    }
                    for($j=1;$j<=$etoile;$j++){
                        echo "*";
                    }
                    $blanc -=1;
                    echo "\n";
                }
            ?>

        </pre>
    </body>
</html>