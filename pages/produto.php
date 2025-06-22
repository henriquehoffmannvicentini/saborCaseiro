<?php
    $nome = $produtos[$id]["nome"];
    $valor = $produtos[$id] ["valor"];
    $foto = $produtos[$id]["foto"];
    $descricao = $produtos[$id]["descricao"];

    $valor = number_format($valor,2, ",", ".");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?=$nome?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2 class="text-center mt-5 mb-4 text-size-4" style="font-size: 40px;  ;">
    <?=$nome?>
</h2>

<div class="row">
    <div class="col-12 col-md-5">
        <img src="img/<?=$foto?>" class="w-100"> 
    </div>
    <div class="col-12 col-md-7 ">
        <p class=" text-center mb-8 mt-2" style="font-size:24px;">
            <?=$descricao?>
        </p>
        <p class="text-center valor mb-4 " style="font-size: 24px; font-weight: bold;">
            R$ <?=$valor?>
        </p>
        <button class="btn btn-primary w-100 mt-4 mb-4"
        onclick="window.open('https://api.whatsapp.com/send?phone=5544984112718&text=Olá, gostaria de encomendar o bolo <?=$nome?> no valor de R$ <?=$valor?>.', '_blank')"
        >pedir pelo whatsapp</button>
    </div>
</div>
    <div>
        <h2 class="text-center mt-5 mb-4 text-size-4" style="font-size: 40px;">
            Outros Produtos
        </h2>
        <div class="row">
        <?php
        foreach ($produtos as $key => $produto) {
            if (!empty($produto['destaque']) && $produto['destaque'] === true && $key != $id) {
                ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="img/<?=$produto['foto']?>" class="card-img-top" alt="<?=$produto['nome']?>">
                        <div class="card-body">
                            <h5 class="card-title"><?=$produto['nome']?></h5>
                            <p class="card-text">R$ <?=number_format($produto['valor'], 2, ',', '.')?></p>
                           <p>
                      <a href='produto/<?php echo $key; ?>' class='btn btn-danger mb-4 mt-4'>encomendar</a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
        </div>
    </div>
</body>
</html>