<html>
<head>
	<title>Connexion</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>




  <?php include "menu.html";?>





  <div class="cont_principal">

    <div class="cont_centrar">
    <div class="cont_login">
      <form action="">
      <div class="cont_tabs_login">
        <ul class='ul_tabs'>
          <li class="active"><a href="#" onclick="sign_in()">Se Connecter</a>
          <span class="linea_bajo_nom"></span>
          </li>
          <li><a href="#up" onclick="sign_up()">Se Connecter</a><span class="linea_bajo_nom"></span>
          </li>
        </ul>
        </div>
    <div class="cont_text_inputs">
        <input type="text" class="input_form_sign " placeholder="NAME" name="name_us" />
      
      <input type="text" class="input_form_sign d_block active_inp" placeholder="EMAIL" name="emauil_us" />

      <input type="password" class="input_form_sign d_block  active_inp" placeholder="PASSWORD" name="pass_us" />  
     <input type="password" class="input_form_sign" placeholder="CONFIRM PASSWORD" name="conf_pass_us" />
      
      <a href="#" class="link_forgot_pass d_block" >Mot de passe oublié ?</a>    
  <div class="terms_and_cons d_none">
      <p><input type="checkbox" name="terms_and_cons" /> <label for="terms_and_cons">Accept  Terms and Conditions.</label></p>
    
      </div>
        </div>
  <div class="cont_btn">
       <button class="btn_sign">SIGN IN</button>
        
        </div>
        
      </form>
      </div>
      
    </div>
  </div>
  <script type="text/javascript" src="../js/connexion.js">
  </script>
</body>
</html>