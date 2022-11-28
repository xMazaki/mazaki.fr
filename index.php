<?php
if(!empty($_GET['try']) && ($_GET['try'] == 1)) {
	if($_POST['password'] == "trop-facile-cherche-encore") {
		$msg = '<font color="green">Félicitation ! Voici le code d\'accès à décoder et à donner à Mazaki pour preuve:<br /><u>65 98 117 115 101 32 112 97 115 32 99 97 32 115 101 114 97 105 116 32 116 114 111 112 32 115 105 109 112 108 101</u></font>';
	}
	else {
		$msg = '<font color="red">Wrong password !</font>';
	}
}
?>
<!-- Raté ! :D -->
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style>
      body {
        font-family: 'Roboto', Verdana, sans-serif;
        background-image: url('bg.jpg');
        background-repeat: repeat;
      }

      .div-centre {
        width: 500px;
        height: auto;
        padding: 10px;
        padding-top: 15px;
        border: 1px black solid;
        border-radius: 15px;
        background-color: white;
        margin-left: auto;
        margin-right: auto;
        justify-content: center;
        align-items: center;
        text-align: center;
      }

      .button {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 7px 14px;
        text-align: center;
        text-decoration: none;
        font-size: 14px;
        transition-duration: 0.4s;
        cursor: pointer;
      }

      .button1 {
        background-color: white;
        color: black;
        border: 2px solid #4CAF50;
        border-radius: 5px;
      }

      .button1:hover {
        background-color: #4CAF50;
        color: white;
      }

      input[type=password] {
        width: 180px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 14x;
        background-color: white;
        padding: 10px 15px 10px 15px;
        transition: width 0.4s ease-in-out;
      }

      input[type=password]:focus {
        width: 90%;
      }

      a,
      a:hover,
      a:active,
      a:visited {
        color: white;
      }
	  
	.txtbase {
	  display: inline-block;
	  -webkit-box-sizing: border-box;
	  -moz-box-sizing: border-box;
	  box-sizing: border-box;
	  padding: 10px;
	  border: none;
	  color: rgba(255,255,255,1);
	  text-decoration: normal;
	  text-align: center;
	  -o-text-overflow: clip;
	  text-overflow: clip;
	  white-space: pre;
	  text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #ff00de , 0 0 70px #ff00de , 0 0 80px #ff00de , 0 0 100px #ff00de ;
	  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	}

	.txtbase:hover {
	  text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , 0 0 40px #00ffff , 0 0 70px #00ffff , 0 0 80px #00ffff , 0 0 100px #00ffff ;
	}
    </style>
    <title>Mazaki ~ Good luck</title>
  </head>
  <body>
    <center>
      <h1>
        <font class="txtbase">Try to unlock this - Giveway for the winner</font>
      </h1>
	  <br />
    </center>
    <div class="div-centre" id="encore-rate"><?php if(!empty($msg)) { echo '<b>'.$msg.'</b><br /><br />'; } ; ?>Password: <br /><br />
      <form action="?try=1" method="post"><input type="password" name="password" placeholder="Type password..."><br /><br /><input type="submit" class="button button1" value="Unlock"></form>
    </div>
	<br />
    <div class="div-centre" id="encore-rate">Indices: <br /><br />
     - <b>Indice n°1 (28/11/2022):</b> The beginning
	 <br />
	 - <b>Next clue on December 5</b>
    </div>
    <center>
      <font color="white">by <a href="https://etherscan.io/address/0x940bf6a4908418b344919f6158ff153abd55ec5c" title="RW5jb3JlIHJhdMOpIDop=">mazaki.eth</a> - <a href="https://twitter.com/MazakiCrypto" title="Twitter">Twitter</a> - <a href="https://github.com/xMazaki" title="Github">Github</a></font>
    </center>
  </body>
</html>
