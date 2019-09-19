<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
	<body>

	<table class="table-bordered m-5">
        <tr>
            <?php 

            

            $i=2;

            for($e=1;$e!=11;$e++){

                echo '<td>*</td>';

            }

            echo '</tr><tr>';

            while($i<=9){

                for($f=1;$f!=11;$f++){

                    if($f==1|| $f==10){

                        echo '<td>*</td>';

                    }else{

                        echo '<td></td> ';

                    }


                }$i++;
                echo '</tr>';

            }
            echo '<tr>';
            for($e=1;$e!= 11;$e++){

                echo '<td>*</td>';

            }
            ?>
        </tr>
    </table>	

	</body>

</html>