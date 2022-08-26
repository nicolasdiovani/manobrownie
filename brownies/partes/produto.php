<?php
$ido=$_GET["butao"];
include_once 'assets/header.php';
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="styles/produto.css">
 </head>
<?php
include_once 'includes/_dados.php'
?>
<body>
    <article>
        <img src="<?php echo$produtos[$ido]["link"] ?>" alt="">
        <h2><?php echo$produtos[$ido]["nome"] ?></h2>
        <p>Um brownie muito bom, melhor que todos os outros, compra por favor, é um <?php echo$produtos[$ido]["nome"]?>, compra ai, é bom demais vicia, 8° maravilha da gastronomia, indicado por ciro brownies (campeão de brownelaria no interior do ceára), brownie campeão no desafio browneados e pelados na categoria te engordar e te fazer feliz. </p>
        <h3><?php echo$produtos[$ido]["preco"]?></h3>
        <button>comprar</button>
    </article>
</body>
<?php
include_once 'assets/footer.php';
?>