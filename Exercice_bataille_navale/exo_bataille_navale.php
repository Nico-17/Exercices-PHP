<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <table class="table table-bordered text-uppercase table-responsive-sm">
            <tr>
                <td></td>
                <?php
                    for ($lettre="a"; $lettre!="k";$lettre++){
                        echo "<th class=\"table-dark\"> $lettre </th>";
                    }
                    echo "</tr> <tr>";
                    for ($i=0; $i!=11; $i++){
                        echo "</tr> <th class=\"table-dark\"> $i </th>";
                        
                        for ($j=0; $j!=10; $j++){
                            echo "<td></td>";
                        }
                    }
                ?>
        </table>
    </body>
</html>