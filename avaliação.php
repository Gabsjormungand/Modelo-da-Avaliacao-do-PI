<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $bd = "bd_pi_anime";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $bd, 3306);

    $sql = "select * from comentarios";

    $todosUsuarios + mysqli_query($conexao, $sql);
    while($umAnime = mysqli_fetch_assoc($todosUsuarios)){
    ?>
    <div class="col text-center">
        <?php
        $estrelas = $umAnime["avaliação"];
        for($i = 0; $i < $estrelas ; $i++){
            echo "⭐";
        }
        ?>
        <p><?php echo $umAnime["nome"];?></p>
    </div>
    <?php
    }
    mysqli_close($conexao);
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>