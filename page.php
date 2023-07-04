<?php require 'connexion.php'; 

?> 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <!--La partie entête-->
    <div class="tete">
<!--La partie logo-->

<div class="gauche">
        <img src="th.jpeg" alt="">
        <div class="titre"> 
            <h1><span>Orange<br></span>Digital Center</h1>
        </div>
        <div class="droite">
        <img src="Vector.jpg" alt="">
        <img src="Vector2.jpg" alt="">
    </div>
    </div>
</div>
<!--La partie milieu-->
<h1 class="m">Orange Digital Center, pour un numérique utile à tous</h1>
</div> 
<!--La partie tableau avec php-->


<table border=1 style="width:100%">
                     <thead style=" font-size: 25px; background: #FD7C05">
                        <tr>
                           <th>Matricule</th>
                           <th>Nom</th>
                           <th>Prenom</th>
                           <th>Age</th>
                           <th>Date de naissance</th>
                           <th>Email</th>
                           <th>Telephone</th>
                           <th>Promotion</th>
                           <th>Année</th>
                           <th>Photo</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <?php 
                     //selection
                     $req = $bd->query('select*from apprenant');
                     while($ligne=$req->fetch()){
                        echo '<tr style= "font-size:25px">';
                        echo '<td>'.$ligne['matricule'].'</td>';
                        echo '<td>'.$ligne['nom'].'</td>';
                        echo '<td>'.$ligne['prenom'].'</td>';
                        echo '<td>'.$ligne['age'].'</td>';
                        echo '<td>'.$ligne['date'].'</td>';
                        echo '<td>'.$ligne['mail'].'</td>';
                        echo '<td>'.$ligne['numero'].'</td>';
                        echo '<td>'.$ligne['promotion'].'</td>';
                        echo '<td>'.$ligne['annee'].'</td>';
                        echo '<td>'.$ligne['photo'].'</td>';
                        echo '</tr>';
                        
                    }
                    ?>
                 
                  </table>
                  <br>
<!--button ajouter-->
<a href="ajout.php">
    <div>
    <button type="submit" name="ajouter" style="width: 250px; height: 50px;font-size: 20px; background: #FD7C05; color: #FFFFFF;font-weight: 700">Ajouter un apprenant</button>
    </div>
    </a>

        

</body>

</html> 
