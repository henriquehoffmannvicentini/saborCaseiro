<style>
.quem-somos {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 40px;
    max-width: 900px;
    margin: 40px auto;
    h2{
        text-align: center;
        margin-bottom: 20px;
        width: 100%;
        order: -1;
    }
}
.quem-somos img {
    max-width: 300px;
    width: 100%;
    height: auto;
    order: 1;
}

@media (max-width: 700px) {
    .quem-somos {
        flex-direction: column;
        text-align: center;
    }
    .quem-somos img, .quem-somos-texto {
        order: unset;
    }
}
</style>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quem Somos - Sabor Caseiro</title>
</head>
<body>
<section class="quem-somos">
    <h2>Quem Somos</h2>
    <p>Bem-vindo à Sabor Caseiro, sua melhor opção para bolos artesanais e deliciosos!
    Nosso objetivo é proporcionar a melhor experiência em cada fatia, usando ingredientes frescos e receitas caseiras.
    Peça já o seu bolo e experimente o sabor caseiro!
    Para mais informações, entre em contato conosco. Estamos aqui para atender você!
    Telefone: (44) 98411-2718</p>
    <img src="/SaborCaseiro/img/confeiteira.png" alt="Confeiteira">
</section>
</body>
</html>