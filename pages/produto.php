<?php
    $nome = $produtos[$id]["nome"];
    $valor = $produtos[$id] ["valor"];
    $foto = $produtos[$id]["foto"];

    $valor = number_format($valor,2, ",", ".");
?>
<h1 class="text-center">
    <?=$nome?>
</h1>

<div class="row">
    <div class="col-12 col-md-5">
        <img src="<?=$foto?>" class="w-100"> 
    </div>
    <div class="col-12 col-md-7">
        <p class="text-center valor">
            R$ <?=$valor?>
        </p>
    </div>
</div>