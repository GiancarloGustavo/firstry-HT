<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/client.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
           <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XM4ENZEK2Z"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XM4ENZEK2Z');
</script>

   <title>Votre espace à vous</title>
</head>
<body>
     <!-- -------header's element--------- -->

    <header>
        <div class="navbar">
            <div class="logo">
                <a href="../index.html"><span>H</span>art-M</a>
            </div>
            <div class="links">
                <ul>
                    <li><a href="../index.html">Acceuil</a></li>
                    <li><a href="../pages/categories.html">Catégories</a></li>
                    <li><a href="../pages/about-us.html">À propos</a></li>
                    <li><a href="../pages/contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="inscription">
                <a href="first-ht/database/login.php">Se connecter</a>
                <a href="first-ht/database/signin.html">S'inscrire</a>
            </div>
            <div class="burgermenu-button">
                <i class="fa-solid fa-bars"></i>
              </div>
        </div>

        <div class="burgermenu">
            <ul class="links-burgermenu">
                <li><a href="../index.html">Acceuil</a></li>
                <li><a href="../pages/categories.html">Catégories</a></li>
                <li><a href="../pages/about-us.html">À propos</a></li>
                <li><a href="../pages/contact.html">Contact</a></li>
                <div class="divider"></div>
                <div class="inscription-burgermenu">
                    <a href="first-ht/database/login.php">Se connecter</a>
                    <a href="first-ht/database/signin.html">S'inscrire</a>
                </div>
            </ul>
        </div>
    </header>

    <!-- -------main's element------- -->

    <main>
            
            <?php

        $servername = "sql101.infinityfree.com";
        $username = "if0_37597361";
        $password = "ampVZ58MU1euVpK";
        $error_msg = "";  // Initialisation de la variable d'erreur

        try {
            // Connexion à la base de données
            $bdd = new PDO("mysql:host=$servername;dbname=if0_37597361_hart", $username, $password);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }

        $email = $_COOKIE['email'];
        $token = $_COOKIE['token'];

        if($token){
                $req = $bdd->query("SELECT * FROM shenshenn WHERE email = '$email' AND token = '$token'");
                $rep = $req->fetch();

                if($rep['prénom'] =! false){
                    echo "Vous êtes connecté ".$rep['prenom']." !";
                }
        }
        else{
            header("Location: first-ht.rf.gd/database/login.php");
        } 

        ?>

    </main>

    <!-- --------footer's element----------- -->

    <footer>
        <div class="footer">
            <div class="relashionship">
                <ul>
                    <li><a href="../partenaires/partners.html">Nos partenaires</a></li>
                    <li><a href="../pages/cookies.html">Nos Cookies</a></li>
                </ul>
            </div>
            <div class="links-footer">
                <ul>
                    <li><a href="../pages/about-us.html">À propos</a></li>
                    <li><a href="../pages/contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="socialmedia">
                <ul>
                    <li> <a href="https://www.instagram.com">Instagram</a></li>
                    <li><a href="https://www.twitter.com">Twitter</a></li>
                </ul>
            </div>
        </div>
       <p class="copyright"> &#169 copyright Hart-M| Tous droits réservés</p>
    </footer>

    <script>
        const burgermenubouton = document.querySelector('.burgermenu-button')
        const burgermenuboutonIcon = document.querySelector('.burgermenu-button i')
        const burgermenu = document.querySelector('.burgermenu')

        burgermenubouton.onclick = function(){
            burgermenu.classList.toggle('open')
            const isOpen = burgermenu.classList.contains('open')
            burgermenuboutonIcon.classList = isOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'
        }
    </script>
</body>
</html>