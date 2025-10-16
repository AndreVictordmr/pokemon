<?php
    require_once "lib/pokedex.php";
    $pokemon = null;
    if($_SERVER['REQUEST_METHOD']==="POST"){
        $nome = $_POST['pokemon'];
        $pokemon = infoPokemon($nome);

    }
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Pokedex</title>
    </head>
    <body>
        <div>
            <h1>Escolha um Pokemon: </h1>
            <form action="" method="post">
                <select name="pokemon" id="">
                    <option value="">--Selecionar--</option>
                    <option value="pikachu">Pikachu</option>
                    <option value="bulbasaur">Bulbasaur</option>
                    <option value="charmander">Charmander</option>
                    <option value="squirtle">Squirtle</option>
                </select>
                <button type="submit">Carregar</button>
            </form>
        </div>
        
        <main id="pokedex">
            <figure>
                <img src="<?php 
                    if($pokemon === null){
                        echo "https://www.pokecenterblog.pt/wp-content/uploads/Home/Big/Floette-eternal.png";
                    }else{
                        echo $pokemon['sprites']['front_default'];
                    }
                ?>" alt="Imagem do <?=$pokemon['name'];?>">
            </figure>
            <div id="dados">
                <p><b>Nome: </b><?= $pokemon===null? "" : $pokemon['name']?></p>
                <p><b>Tipo: </b>
                <?php
                    if($pokemon === null){
                        echo "";
                    }else{
                    for($i=0;$i<count($pokemon['types']);$i++){?>
                        <?= $pokemon['types'][$i]['type']['name']?></p>
                <?php }
                    }?>
            </div>
        </main>
        
    </body>
</html>