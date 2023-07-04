<?php 
require 'connexion.php';
//insertion
if(isset($_POST['ajouter'])){
    if(isset($_POST['matricule'],$_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['date'],$_POST['mail'],$_POST['phone'],$_POST['promotion'],$_POST['annee'],$_POST['photo'])){
        $req=$bd->prepare('insert into apprenant(matricule,nom,prenom,age,date,mail,numero,promotion,annee,photo) values(?,?,?,?,?,?,?,?,?,?)');
        $req->bindValue(1,$_POST['matricule']);
        $req->bindValue(2,$_POST['nom']);
        $req->bindValue(3,$_POST['prenom']);
        $req->bindValue(4,$_POST['age']);
        $req->bindValue(5,$_POST['date']);
        $req->bindValue(6,$_POST['mail']);
        $req->bindValue(7,$_POST['numero']);
        $req->bindValue(8,$_POST['promotion']);
        $req->bindValue(9,$_POST['annee']);
        $req->bindValue(10,$_POST['photo']);
        $req->execute();
        header('Location:page.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpor" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styl.css">

    <title>Document</title>
</head>
<body>
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
<!--formulaire-->
<form action="ajouter" method="post">
<div class ="centre">
    <div>
<label for="matricule" class = "la">Matricule</label>
<input type="text" name="matricule" class="ipnt" value="<?php if(isset($_POST['matricule'])) 
            echo $_POST['matricule'] ?>">
            </div>
<div>
<label for="nom" class = "la">Nom</label>
<input type="text" name="nom" class="ipnt" value="<?php if(isset($_POST['nom'])) 
            echo $_POST['nom'] ?>">
            </div>
<div>
<label for="prenom" class = "la">Prenom</label>
<input type="text" name="prenom" class="ipnt" value="<?php if(isset($_POST['prenom'])) 
            echo $_POST['prenom'] ?>" >
            </div>
            <div>

<label for="age" class = "la">Age</label>
<input type="number" name="age" class="ipnt" value="<?php if(isset($_POST['age'])) 
            echo $_POST['age'] ?>">
</div>

<div>
<label for="date" class = "la">Date de naissance</label>
<input type="date" name="date" class="ipnt" value="<?php if(isset($_POST['date'])) 
            echo $_POST['date'] ?>">
            </div>
            <div>

<label for="mail" class = "la">Mail</label>
<input type="email" name="mail" class="ipnt" value="<?php if(isset($_POST['mail'])) 
            echo $_POST['mail'] ?>">
            </div>
            <div>

<label for="phone" class = "la">Telephone</label>
<input type="text" name="phone" class="ipnt" value="<?php if(isset($_POST['phone'])) 
            echo $_POST['phone'] ?>">
            </div>
            <div>

<label for="promo" class = "la">Promotion</label>
<input type="text" name="promo" class="ipnt" value="<?php if(isset($_POST['promo'])) 
            echo $_POST['promo'] ?>">
            </div>

            <div>
<label for="annee" class = "la">Année</label>
<input type="number" name="annee" class="ipnt"value="<?php if(isset($_POST['annee'])) 
            echo $_POST['annee'] ?>">
            </div>
            <br>
            <div class ="profil">
            <input type="file" name="image" id="image">
            </div>
            <br>
<div>
<a href="page.php">
<button type="submit" name ="valider" class ="bt">valider</button>
</a>
</div>

</div>
</form>
</div>
</body>
</html>

