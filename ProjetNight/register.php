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
<div class='main_content'>
    <div class='register_form_container'>
    <form method='POST'>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input name='email' type="email" class="form-control" id="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input  name='username' type="text" class="form-control" id="username">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name='password' type="password" class="form-control" id="password">
    </div>

    <div class="mb-3">
        <label for="password confirmation" class="form-label">Password confirmation</label>
        <input name='pass2' type="password" class="form-control" id="password confirmation">
    </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-success" type="submit">Register</button>
        </div>
    </form>
    </div>
</div>
    
</body>
</html>



<?php



if(isset($_POST['password'])){
    if($_POST['password'] != $_POST['pass2']){
        echo "<script>alert('Mot de passe diff')</script>";
    }
    $password = $_POST['password'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $requete = $bdd->prepare("INSERT INTO _user (username, email_user,password_user) VALUES (?,?,?)");
    $requete->execute([$username,$email,$password]);
}

?>

