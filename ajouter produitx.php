<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <aside class="col-lg-6">
         <!-- ============== COMPONENT POSTING ============== --> 
         <div class="card mb-4"> 
             <article class="card-body">
                  <h4 class="mb-4">Submit product</h4> 
                  <form action="" method="POST"> 


                      <div class="row mb-4">
                       <label class="col-3 col-form-label">Marque</label>
                        <div class="col-9"> 
                            <input type="text" class="form-control" required name="marque" placeholder="Marque">
                         </div> 
                        

                         <!-- col end.// -->
                         </div>
                         <div class="row mb-4">
                       <label class="col-3 col-form-label">Serie</label>
                        <div class="col-9"> 
                            <input type="text" class="form-control" required name="serie" placeholder="serie">
                         </div> 
                         

                         <!-- col end.// -->
                         </div>
                         <div class="row mb-4">
                         <label class="col-3 col-form-label">Type Ordinateur</label> 
                                                      <div class="col-9"> 
                                                          <select class="form-select" required name="type">
                                                                <option></option>
                                                                <option value="otdinateur portable">Ordinateur portable</option> 
                                                                <option value="otdinateur bureau">Ordinateur bureau</option> 
                                                                <option value="otdinateur mini">Ordinateur mini </option>
                                                                 </select>
                                                                 </div> 
                                                                 
                         </div>
                        <!-- <div class="row mb-4"> -->
                       <label class="col-3 col-form-label">Processeur</label>
                        <div class="col-9"> 
                            <input type="text" class="form-control" required name="processeur" placeholder="processeur">
                         </div> 


                         <!-- col end.// -->
                         </div>
                         <div class="row mb-4">
                       <label class="col-3 col-form-label">RAM</label>
                        <div class="col-9"> 
                            <input type="number" class="form-control" required name="ram" placeholder="RAM">
                         </div> 
                         

                         <!-- col end.// -->
                         </div>
                         <div class="row mb-4">
                       <label class="col-3 col-form-label">ROM</label>
                        <div class="col-9"> 
                            <input type="number" class="form-control" required name="rom" placeholder="ROM">
                         </div> 

                                                  <!-- col end.// -->
                                                  </div>
                         <div class="row mb-4">
                         <label class="col-3 col-form-label">type de disque dur</label> 
                                                      <div class="col-9"> 
                                                          <select class="form-select" required name="typedisk[]" multiple>
                                                                <option value="SSD">SSD</option> 
                                                                <option value="HDD">HDD</option> 
                                                                <option value="SSHD">SSHD </option>
                                                                 </select>
                                                                 </div> 

                         </div>
                         <div class="row mb-4">
                              <label class="col-3 col-form-label">Carte Graphique</label>
                               <div class="col-9"> 
                                   <input type="text" class="form-control" required name="graphique" placeholder="Carte Graphique"> 
                                </div>
                                 <!-- col end.// -->
                             </div> 


                         <div class="row mb-4">
                              <label class="col-3 col-form-label">Prix Initiale</label>
                               <div class="col-9"> 
                                   <input type="number" step="any" required name="prix" class="form-control" placeholder=""> 
                                </div>


                                 <!-- col end.// -->
                             </div> 
                             <div class="row mb-4">
                              <label class="col-3 col-form-label">Promotion</label>
                               <div class="col-9"> 
                                   <input type="number" step="any" name="promo" class="form-control" placeholder=""> 
                                </div>

                                 <!-- col end.// -->
                             </div>
                             <div class="row mb-4">
                              <label class="col-3 col-form-label">Systém D'exploitation</label>
                               <div class="col-9"> 
                                   <input type="text" name="ios" class="form-control" placeholder="" required> 
                                </div>

                                 <!-- col end.// -->
                             </div>
                             <div class="row mb-4">
                              <label class="col-3 col-form-label">Taille D'écran</label>
                               <div class="col-9"> 
                                   <input type="text"  name="tecron" class="form-control" > 
                                </div>

                                 <!-- col end.// -->
                             </div>
                             <div class="row mb-4">
                              <label class="col-3 col-form-label">Colour</label>
                               <div class="col-9"> 
                                   <input type="text"  name="colour" required class="form-control" placeholder="colour"> 
                                </div>

                                 <!-- col end.// -->
                             </div>
                             <div class="row mb-4">
                              <label class="col-3 col-form-label">Tactile</label>
                               <div class="col-9"> 
                                   <input type="text"  name="tactile" class="form-control" placeholder="tactile"> 
                                </div>

                                </div>
                                <div class="row mb-4">
                              <label class="col-3 col-form-label">Quantite de stock</label>
                               <div class="col-9"> 
                                   <input type="text"  name="qstock" required class="form-control" placeholder="Quantite de stock"> 
                                </div>

                                 <!-- col end.// -->
                             </div>
                             <!-- row end.// --> 
                             <div class="row mb-4"> 
                                             <label class="col-3 col-form-label">photo</label>
                                              <div class="col-9"> 
                                                  <textarea class="form-control" required name="photo" placeholder="photo"></textarea> 
                                                </div>
                                                 <!-- col end.// -->
                                                 </div>

                                         <!-- row end.// --> 
                                         <div class="row mb-4"> 
                                             <label class="col-3 col-form-label">Description</label>
                                              <div class="col-9"> 
                                                  <textarea class="form-control" required name="descrip" placeholder="Description"></textarea> 
                                                </div>

                                                 <!-- col end.// -->
                                                 </div>
                                                  <!-- row end.// --> 

                                                                 <!-- row end.// -->
                                                               
                                                                                         <!-- row end.// --> 
                        <div class="row mb-2">
                            <div class="col-9 offset-3"> 
                                <button type="submet" name="btn" class="btn btn-primary">Ajouter product</button> 
                                <button type="reset" name="btn-anuler" class="btn btn-outline-danger">Annuler</button> 
                            </div> 
       
                                
 <?php
if(isset($_POST["btn"]))
{//identifiants mysql
$host = "localhost";
$username = "root";
$password = "";
$dbname = "OrdiShop";
$dis=null;
foreach($_POST["typedisk"] as $disck){
    $dis.=$disck." ";
}

//Ouvrir une nouvelle connexion au serveur MySQL
$con = new PDO("mysql:host=$host;dbname=$dbname", $username, 
$password);
//préparer la requête d'insertion SQL
$sql = 'INSERT INTO produit VALUES(:code_pr, :emarque_pr, :serie_pr , :type_pr ,:prece_pr , :ram_pr ,:rom_pr ,:tpdisque_pr ,:cgraphique_pr ,:prix_inistial_pr
,:propmotion_pr,:ios_pr, :ecran_pr ,:colour_pr ,:tactil_pr ,:qstock_pr ,:photo_pr ,:description_pr )';
$statement = $con->prepare($sql);
if ($statement->execute([':code_pr' => null, ':emarque_pr' => $_POST["marque"], ':serie_pr' => $_POST["serie"] , ':type_pr'=> $_POST["type"], ':prece_pr'=>
$_POST["processeur"] ,':ram_pr' => $_POST["ram"] ,':rom_pr' =>$_POST["rom"],':tpdisque_pr' =>$dis,':cgraphique_pr'=>$_POST["graphique"]
,':prix_inistial_pr'=>$_POST["prix"] ,':propmotion_pr'=>$_POST["promo"],':ios_pr'=>$_POST["ios"],':ecran_pr'=>$_POST["tecron"],':colour_pr'=>$_POST["colour"]
,':tactil_pr'=>$_POST["tactile"],':qstock_pr'=>$_POST["qstock"],':photo_pr'=>$_POST["photo"],":description_pr"=>$_POST["descrip"]])) 
{
$message = 'Donnée créée avec succès';
}
else
{
$message="err";
}
echo $message;}
?>                               
                   <!-- col end.// -->
                </div> 
            <!-- row end.// -->
            </form> 
        <!-- form end.// -->
    </article>
     <!-- card-body end .// -->
</div>
  <!-- card end.// --> 
 <!-- ============== COMPONENT POSTING END.// ============== --> 
</aside>
</body>
</html>