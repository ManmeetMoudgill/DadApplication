<?php
session_start();

include './links.php';
echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" >Svillupato Da Manmeet Moudgill</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item text-center">
          <a class="nav-link mx-5 text-center active" aria-current="page" >Informazione & Routine Lavorativa 🚧🚧</a>
        </li>';
        
        if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true){
            echo '
            <p class=" my-2 text-dark ">Welcome '. $_SESSION['username'].'</p>
            <button class=" mx-3 btn btn-sm btn-success"><a class="text-light text-decoration-none"href="./logout.php">Disconnetti</a></button>';     
          }else{
            echo 
            '<div class="right">
            <button type="button" class="mx-1 btn btn-success" data-toggle="modal" data-target="#loginModal">
             Accedi
             </button>
             <button type="button" class="mx-1 btn btn-success" data-toggle="modal" data-target="#signUpModal">
              Iscriviti
             </button>
             </div>
             ';
      
          }
      echo '
      </div>
      </div>
      </nav>';

include './loginModal.php';
include './signUpModal.php';


       if(isset($_GET['failedSignup']) && $_GET['failedSignup'] == true){
        $alert='<div class="alert my-0 alert-warning alert-dismissible fade show" role="alert">
        <strong>Messaggio</strong>Credenziali già registrate Registrati prima per usufruire.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        echo $alert;
        
    }
  
    else if(isset($_GET['Signup']) && $_GET['Signup'] == true){
        echo '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
        <strong>Messaggio</strong>Account creato con successo.Puoi Effetuare il login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    else if(isset($_GET['passwordWrong'])&& $_GET['passwordWrong'] == true){
        echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
        <strong>Messaggio</strong>le password non corrispondono.Riprova
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    
    }else if(isset($_GET['logIN'])&& $_GET['logIN'] == true){
        echo '<div class="alert my-0 alert-success alert-dismissible fade show" role="alert">
        <strong>Messaggio</strong>Ora sei Loggato(Now you are Logged In)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    else if(isset($_GET['passwordWrongDB'])&& $_GET['passwordWrongDB'] == true){
        echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
        <strong>Messaggio</strong>Password Sbagliato,Inserisci Il Password Corretto.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    else if(isset($_GET['signUpFirst'])&& $_GET['signUpFirst'] == true){
        echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
        <strong>Messaggio</strong>Non sei ancora registrato, registrati prima.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    else if(isset($_GET['loggedOut']) && $_GET['loggedOut']==true){
        echo '<div class="alert my-0 alert-danger alert-dismissible fade show" role="alert">
        <strong>Messaggio</strong>Ora sei disconnesso!!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
?>