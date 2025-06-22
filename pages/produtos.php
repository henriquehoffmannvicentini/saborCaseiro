<?php
include "array.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Bolos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .catalogo {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
        }
        .produto {
            flex: 1 0 30%;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 24px;
            text-align: center;
            background: #fafafa;
        }
        .produto img {
            max-width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 4px;
        }
        
        .produto h3 {
            margin: 12px 0 8px 0;
        }
        .produto p {
            margin: 0;
            color: #333;
        }
    </style>
</head>
<body>
    <h2 class="text-center mt-5 mb-4">Catálogo de Bolos</h2>
    <div class="catalogo">
        <?php foreach ($produtos as $id => $produto): ?>
            <div class="produto">
                 <img src="img/<?=$produto['foto']?>" class="card-img-top" alt="<?=$produto['nome']?>">
                <h3><?php echo htmlspecialchars($produto['nome']); ?></h3>
                <p>R$ <?php echo number_format($produto['valor'], 2, ',', '.'); ?></p>
                <p>
                      <a href='produto/<?php echo $id; ?>' class='btn btn-danger mb-4 mt-4'>encomendar</a>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>


