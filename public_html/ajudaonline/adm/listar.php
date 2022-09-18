<?
// Escolar
?>
<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../0/icon/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="../0/css/custom_adm.css">
  <title>Adm</title>
 </head>
 <body>
  <!-- inicio navbar -->
  <nav class="navbar">
      <div class="navbar-content">
        <img class="logo" src="../imagens/logo_arvoredaprosperidade.png" width="30" alt="Rick">
        <div class="bar">
          <i class="fa-solid fa-bars"></i>
        </div>
      </div>
      <div class="navbar-content">
          <div class="notification">
              <i class="fa-solid fa-bell"></i>
              <span class="number">7</span>
              <div class="dropdown-menu">
                <div class="dropdown-content">
                    <li>
                        <img src="../0/imgs/user_std.png" alt="usuario">
                        <div class="text">loren ipsun 1</div>
                    </li>
                    <li>
                        <img src="../0/imgs/user_std.png" alt="usuario">
                        <div class="text">loren ipsun 2</div>
                    </li>
                </div>
              </div>

          </div>
          <div class="avatar">
              <img src="../0/imgs/avatar_std.png" alt="avatar" width="30"/>
              <div class="dropdown-menu setting">
                
                  <div class="item">
                      <span class="fa-solid fa-user"></span>Perfil
                  </div>
                  <div class="item">
                      <span class="fa-solid fa-gear"></span>Config
                  </div>
                  <div class="item">
                      <span class="fa-solid fa-arrow-right-from-bracket"></span>Sair
                  </div> 

              </div>
          </div>
      </div>
  </nav>
  <!-- fim navbar -->

  <!-- inicio conteudo -->
  <div class="content">
    <!-- inicio sidebar -->
    <div class="sidebar">
      <a class="sidebar-nav" href="index.php"><i class="fa-solid fa-home"></i><span>Central</span></a>
      <a class="sidebar-nav active" href="listar.php"><i class="fa-solid fa-users"></i><span>Listar</span></a>
      <a class="sidebar-nav" href="login.php"><i class="fa-solid fa-arrow-right-from-bracket"></i><span>Sair</span></a>
    </div>
    <!-- fim sidebar -->

    <!-- inicio conteudo administrativo -->
    <!-- fim conteudo administrativo -->
  </div>
  <!-- fim conteudo -->
  <script src="../0/js/custom_adm_js.js"></script>
 </body>


</html>