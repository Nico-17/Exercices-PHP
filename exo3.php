<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <table class="table table-bordered table-striped">
            <tr>
                <td></td>
                <?php
                    for($i=0;$i!=11;$i++){
                        echo "<th class=\"table-dark\"> $i </th>";
                    }
                    echo " </tr> <tr>";
                    for($j=0;$j!=11;$j++){
                        echo " </tr> <th class=\"table-dark\"> $j </th> ";

                        for($i=0;$i!=11;$i++){
                            $resultats = $i + $j;
                            echo "<td> $resultats </td>";
                        }
                    }
                ?>
        
        </table>
    </body>
</html>