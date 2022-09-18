<?
/* 
Criado por Ricardo Alsoa 
01/08/2022
*/
 include '0/fn/nexus.php';
 include '0/fn/magpattern.php';

  session_start();
 
  if($_GET['ois'] != $_SESSION['spam_verify']) echo "Voc&ecirc; &eacute; um bot!<br />n";
  else echo "Voc&ecirc; &eacute; um humano!<br />n";
 
  $ops = array('+', '-');
  $exp = rand(1, 10);
  for($i = rand(2, 3); $i > 1; $i--)
	$exp .= $ops[rand(0, 2)].rand(1, 10);
 
  $_SESSION['spam_verify'] = eval("return $exp;");
  echo $exp;

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>luckgin</title>

    <meta name="description" content="...">
    <meta name="keywords" content="...">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="0/css/bootstrap46.css">
    <link rel="stylesheet" href="0/css/alsoa.css">

    <? echo $googleAnalytics; ?>
  </head>
<body>
  <div class="container-fluid">
      <div class="mt-2 mx-auto"  style="width: 200px;">
        <img class="rounded" max-size="200px" src="imagens/logo_arvoredaprosperidade.png" alt="Logo Comsorte">
      </div>
      <div class="mt-2">
         <form>
            <div class="form-group">
             <label for="exampleInputEmail1">Email address</label>
             <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
             <small id="emailHelp" class="form-text text-muted">Seus dados jamais serao compartilhados aqui.</small>
            </div> 
            <div class="form-group">
              <label>Password</label>
              <div class="input-group" id="show_hide_password">
               <input class="form-control" type="password">
               <div class="input-group-addon">
                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
               </div>
              </div>
            </div>
            <div class="input-group">
                
            </div>
           <button type="submit" class="btn btn-primary">Login</button>
         </form>          
      </div>
  </div>
<script src="0/js/hpass.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>


<? $conn = null; ?>
</body>
</html>