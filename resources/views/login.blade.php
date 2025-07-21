<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/login.css') }}">
</head>
<body>
    <div class="cotn_principal">
<div class="cont_centrar">

  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">
        
        <h2>LOGIN</h2>  
  <p></p> 
  <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
  </div>
  </div>
    <div class="col_md_sign_up">
        <div class="cont_ba_opcitiy">
        <h2>SIGN UP</h2>

        
        <p></p>

        <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
        </div>
    </div>
</div>

    
    <div class="cont_back_info">
       <div class="cont_img_back_grey">
       <img src="https://www.gtagangwars.de/suite/images/styleLogo-6bd77433ddf78bd8477ea7306e804f677bc925d0.png" alt="" />
       </div>
       
    </div>
    <div class="cont_forms" >
        <div class="cont_img_back_">
        <img src="https://www.gtagangwars.de/suite/images/styleLogo-6bd77433ddf78bd8477ea7306e804f677bc925d0.png" alt="" />
        </div>

        <div class="cont_form_login">
            <a href="#" onclick="ocultar_login_sign_up()">
            <i class="material-icons">arrow_back</i>
            </a>
            <h2>LOGIN</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" name="email" placeholder="Correo" required />
                <input type="password" name="password" placeholder="Contraseña" required />
                <button type="submit" class="btn_login">Iniciar sesión</button>
            </form>
        </div>

        <div class="cont_form_sign_up">
            <a href="#" onclick="ocultar_login_sign_up()">
                <i class="material-icons">arrow_back</i>
            </a>
            <h2>SIGN UP</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="email" name="email" placeholder="Correo" required />
                <input type="text" name="name" placeholder="Usuario" required />
                <input type="password" name="password" placeholder="Contraseña" required />
                <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" required />
                <button type="submit">SIGN UP</button>
            </form>
        </div>


    </div>
    
  </div>
 </div>
</div>
    
</body>
<script>
    /* ------------------------------------ Click on login and Sign Up to  changue and view the effect
---------------------------------------
*/

function cambiar_login() {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";  
document.querySelector('.cont_form_login').style.display = "block";
document.querySelector('.cont_form_sign_up').style.opacity = "0";               

setTimeout(function(){  document.querySelector('.cont_form_login').style.opacity = "1"; },400);  
  
setTimeout(function(){    
document.querySelector('.cont_form_sign_up').style.display = "none";
},200);  
  }

function cambiar_sign_up(at) {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
  document.querySelector('.cont_form_sign_up').style.display = "block";
document.querySelector('.cont_form_login').style.opacity = "0";
  
setTimeout(function(){  document.querySelector('.cont_form_sign_up').style.opacity = "1";
},100);  

setTimeout(function(){   document.querySelector('.cont_form_login').style.display = "none";
},400);  


}    



function ocultar_login_sign_up() {

document.querySelector('.cont_forms').className = "cont_forms";  
document.querySelector('.cont_form_sign_up').style.opacity = "0";               
document.querySelector('.cont_form_login').style.opacity = "0"; 

setTimeout(function(){
document.querySelector('.cont_form_sign_up').style.display = "none";
document.querySelector('.cont_form_login').style.display = "none";
},500);  
  
  }




</script>
</html>
