<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting system-dashboard</title>

     <!--Boostrap css link--->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">
    <div class="container">
        <?php
        $positions =array(
            President= array(
            ("id"=1, "name"="ALpha Gachuri", "photo"="img4.jpg"),
            ("id"=1, "name"="Diane Gabriela", "photo"="img4.jpg"),
            ("id"=1, "name"="Eliud Kibunja", "photo"="img4.jpg")
            ),

            Vice President= array(
                array("id"=1, "name"="Timothy Alphayo", "photo"="img4.jpg"),
                array("id"=1, "name"="Givens Samba", "photo"="img4.jpg"),
                array("id"=1, "name"="Ezra Mazola", "photo"="img4.jpg")
                ),

                Academic Secretary= array(
                    array("id"=1, "name"="Juanita Christine", "photo"="img4.jpg"),
                    array("id"=1, "name"="Jomo Murimi", "photo"="img4.jpg"),
                    array("id"=1, "name"="Esther Mwaniki", "photo"="img4.jpg")
                    ),

                    Secretary General= array(
                        array("id"=1, "name"="Allan Gachuri", "photo"="img4.jpg"),
                        array("id"=1, "name"="Dia Mutheu", "photo"="img4.jpg"),
                        array("id"=1, "name"="Tiffany Kariuki", "photo"="img4.jpg")
                        ),

                        Treasurer= array(
                            array("id"=1, "name"="Judy Ndele", "photo"="img4.jpg"),
                            array("id"=1, "name"="Shorn Kemunto", "photo"="img4.jpg"),
                            array("id"=1, "name"="Shemice Oluoch", "photo"="img4.jpg")
                            ),

                            Co-curricular & Social Afairs= array(
                                array("id"=1, "name"="Kingsley Gitau", "photo"="img4.jpg"),
                                array("id"=1, "name"="Collins Kipchumba", "photo"="img4.jpg"),
                                array("id"=1, "name"="Suzan Kairetu", "photo"="img4.jpg")
                                ),
                            );

                            if ($_SERVER["REQUEST_METHOD"])=="POST"{
                                foreach($_POST as $position_id=$aspirant _id){
                                    echo"Vote for Aspirant ID:$aspirant_id for Position_id<br>";
                                }
                            }

                            foreach($positions as $position=$candidates){
                                echo "<h4>$position>/h4>";
                                echo "<form method='post'>";
                                echo "<table class='table'>";
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>Name</th>";
                                echo "<th>Photo</th>";
                                echo "<th>Vote</th>";
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                            }

                           foreach($candidates as $candidates) {
                            $aspirant_id=$candidates['id'];
                            $name=$candidate['id'];
                            $photo=$candidate['id'];
                            $voted=false;
                            echo"<tr>";
                            echo"<td>$name</td>";
                            echo"<td><img src='$photo' alt='$name' style='width:50px; height:50px;'></td>";
                            echo"<td>";
                            if(!$voted){
                                echo "<input type='radio' name='position_$position_id'value='$aspirant_id'>";
                            }
                            else{
                                echo "Voted";
                                echo "</td>, </tr>";
                                echo"</tbody>";
                                echo"</table>";
                                echo"<input type='submit class='btn btn-primary' value='vote'>";
                                echo"</form>";
                            }
                           }
        ?>
</div>
                        </body>
                        </html>