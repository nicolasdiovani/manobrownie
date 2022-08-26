<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contatos</title>
    <link rel="stylesheet" href="styles/contato.css">
</head>
<?php 
include_once 'assets/header.php';
?> 
<main>
    <article id="arti">
        <img src="imagens/contato2.png" id="banner-contato">
        <div id="bnt">
        <h2>Me contate:</h2>
        <form action="recebe-contato.php" method="GET" >
        <input type="text" placeholder="nome completo" name="nome">
        <input type="email" placeholder="email" name="email">
        <input type="text" placeholder="mensagem" id="sms" name="mensagem">
        <button>enviar</button>
    </form>
    </div>
    </article>
</main>
<?php 
include_once 'assets/footer.php';
?> 
