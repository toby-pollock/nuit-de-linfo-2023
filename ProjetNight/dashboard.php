<?php
require 'header.php';

?>
<link rel="stylesheet" href="dashboard.css">



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

    <div class='title_content'>
        <h1>RANKING</h1>

    </div>

        <div class='user_card_container'>
            <?php
           
            $users_req = $bdd->query("Select * from _user where _user.score_total is not null ");
            $users = $users_req->fetchAll();
            foreach($users as $user){    // $user['username'];
                echo "<div class='user_card'>
                        <div class='user_card_left'>
                            <h2>"."Username: ".$user['username']."</h2>
                        </div>
                        <div class='user_card_right'>
                            <h2>"."Score:  ".$user['score_total']."</h2>
                        </div>
                        
                        
                    </div>";
            }
            ?>

      </div>
</div>



 
</body>
</html>