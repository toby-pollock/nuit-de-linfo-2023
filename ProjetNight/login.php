<?php
require 'header.php';

?>
<link rel="stylesheet" href="login_register.css">



</head>

<body>
<div class='header_container'>
 
<div class='header_left_part'>
        <h5><a href='dashboard.php' class="lien-sans-decoration">DASHBOARD</a></h5>
    </div>
    <div class='header_right_part'>
        <h5><a href='login.php' class="lien-sans-decoration">LOG IN</a></h5>
        <h5><a href='register.php' class="lien-sans-decoration">SIGN IN</a></h5>
    </div>


</div>
<div class='main_content_login'>
    <div class='register_form_container'>
    <form method='POST'>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input name='email' type="email" class="form-control" id="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name='password' type="password" class="form-control" id="password">
    </div>

   
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-success" type="submit">Log In</button>
        </div>
    </form>
    </div>
</div>
    
</body>
</html>



<?php 


if(isset($_POST['password'])){
    $password = $_POST['password'];
    $email = $_POST['email'];

    $requete = $bdd->prepare("SELECT  id_user , password_user FROM _user WHERE email_user = ?");
    $requete->execute([$email]);

    $requete = $requete->fetchAll();
    $salt = $requete[0][0];

   

    

    $requete = $bdd->prepare("SELECT * FROM _user WHERE email_user = ? AND password_user = ?");
    $requete->execute([$email, $password]);

    if ($requete->rowCount() == 1) {
        // L'utilisateur est authentifié
        $_SESSION["logged_in"] = true;
        header("Location: index.php"); // Redirigez l'utilisateur vers sa page de tableau de bord ou autre
        exit();
    } else {
        // Mauvaises informations de connexion
        $error_message = "Email ou mot de passe incorrect.";
    }
}






?>