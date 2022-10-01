<?php
       include ("headerglobale.php");

 ?>
 <!-- section-header end.// -->
<!--end header -->
<!-- staRT CONECTER -->
<section class="h-100 gradient-form " style="background-color: #eee;">
    <div class="container py-1 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100 mt-5 mb-5">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <h1 class="logo text-primary">OrdiShop</h1>
                  </div>
                  <form action="" method="POST">
                    <p>connecter-vous</p>
  
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example11" name="mail" class="form-control"
                        placeholder="E-mail ou Telephone" />
                      <label class="form-label"  for="form2Example11">E-mail</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example22" name="pass" class="form-control" placeholder="************" />
                      <label class="form-label"  for="form2Example22">Mot de passe</label>
                    </div>
                    





                    <div class="text-center pt-1 mb-2 pb-1">
                      <button class="btn btn-primary  me-4 mb-3"  name="btn" type="submit">Se connecter
                       </button>
                       <?php
                      //  session_start();
                    include("connexion.php"); 
                    if(isset($_POST["btn"])){
                        $sql="SELECT * FROM client WHERE email_c='".$_POST['mail']."' AND pass_c='".$_POST['pass']."'";
                        $reponse = $con->query($sql);                                               
                        $statment=$reponse->fetch();
                        /* ($_POST["mail"] == $statment["email_c"]) && ( $_POST["pass"] == $statment["pass_c"]) */
                        if( $statment) {  
                          echo "se connecter";
                          session_start();
                          $_SESSION["nom"]=$statment["nom_c"];
                          $_SESSION["idclient"]=$statment["email_c"];
                          echo "<script>window.location.href='Nos_ordinateur.php';</script>";
                        }else {
                            echo "<h5>email ou mot de passe incorrect</5><br> ";
                            unset($_SESSION["nom"]);
                        }
                        $reponse->closeCursor();};
                    ;
                    
                    ?>

                      <a class="text-muted" href="#!">Mot De Passe oublie ?</a>
                    </div>
  
                    <div class="align-items-center justify-content-center py-2">
                        <p class="text-center mb-0 me-2">connectez-vous via</p>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <a href="#" class="me-4"><i class="fa-brands fa-facebook text-white bg-info p-3 rounded"></i></a>
                            <a href="#"><i class="fa-brands fa-google text-white p-3 bg-danger rounded"></i></a>
                        </div>
                      </div>
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center bg-info">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">inscrivez-vous</h4>
                  <p class="small mb-0">creer votre compte client ordi shop en quelques clics !
                      vous pouvez vous inscrire soit en utilisant votre adresse e-mail,soit via votre
                      compte google ou facebook.
                  </p>
                  <div class="d-flex align-items-center justify-content-center py-4 mb-5">
                    <p class="mb-0 me-2">Vous avez deja  un compte ?
                      <button class="btn rounded-5 btn-block fa-lg btn-primary ms-4 mt-3 mb-3" type="submit"><a class="text-white" href="creerCompt.php" style="text-decoration: none;">Creer Compte</a>
                  </div>
                  </button>
                  <div class="align-items-center justify-content-center py-2">
                    <p class="text-center mb-0 me-2">creer un compte via</p>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <a href="#" class="me-4"><i class="fa-brands fa-facebook text-info bg-white p-3 rounded"></i></a>
                        <a href="#"><i class="fa-brands fa-google text-white p-3 bg-danger rounded"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  END CONNECTER -->
  <!--START footer -->
  <footer class="section-footer bg-primary text-white  pt-5 pb-5">
    <div class="container">
      <section class="footer-main padding-y">
        <div class="row">
          <aside class="col-12 col-sm-12 col-lg-3">
            <article class="me-lg-4">
              <h1 class="logo-footer">OrdiShop</h1>
              <!-- <img src="images/logo.png" class="logo-footer"> -->
              <p class="mt-3"> © 2021- 2022 , <br> Tous droits réservés. </p>
            </article>
          </aside>
          <aside class="col-6 col-sm-4 col-lg-2">
            <h6 class="title">Magasin</h6>
            <ul class="list-menu mb-4">
              <li> <a href="#">À propos de nous</a></li>
              <li> <a href="#">Trouver un magasin</a></li>
              <li> <a href="#">Catégories</a></li>
              <li> <a href="#">Blogs</a></li>
            </ul>
          </aside>
          <aside class="col-6 col-sm-4 col-lg-2">
            <h6 class="title">Information</h6>
            <ul class="list-menu mb-4">
              <li> <a href="#">Centre d'aide</a></li>
              <li> <a href="#">Remboursement d'argent</a></li>
              <li> <a href="#">Informations d'expédition</a></li>
              <li> <a href="#">Remboursements</a></li>
            </ul>
          </aside>
          <aside class="col-6 col-sm-4  col-lg-2">
            <h6 class="title">Support</h6>
            <ul class="list-menu mb-4">
              <li> <a href="#"> Centre d'aide </a></li>
              <li> <a href="#"> Documents </a></li>
              <li> <a href="#"> Restauration de compte </a></li>
              <li> <a href="#"> Mes commandes </a></li>
            </ul>
          </aside>
          <aside class="col-12 col-sm-12 col-lg-3">
            <h6 class="title">lettre d'information</h6>
            <p>Restez en contact avec les dernières mises à jour sur nos produits et offres</p>
    
            
              
            </form>
          </aside>
        </div> <!-- row.// -->
      </section>  <!-- footer-top.// -->

    
      <section  class="footer-bottom d-flex justify-content-lg-between border-top" >
        <nav class="dropup">
            <button class="dropdown-toggle btn d-flex align-items-center py-0" type="button" data-bs-toggle="dropdown">
              <img src="images/flags/flag-usa.png" class="me-2" height="20"> 
              <span>Francais</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Arabic</a></li>
            </ul>
        </nav>
        
      </section>
    </div> <!-- container end.// -->
    </footer>

  <!-- end footer -->
</body>
</html>