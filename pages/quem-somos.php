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
    border-radius: 50px;
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

.localizacao {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    max-width: 900px;
    margin: 40px auto;
}
.localizacao-texto {
    text-align: center;
    margin-bottom: 20px;
}
.localizacao iframe {
    width: 100%;
    height: 450px;
    border: 0;
}
@media (min-width: 701px) {
    .localizacao {
        flex-direction: row;
        gap: 40px;
        align-items: flex-start;
    }
    .localizacao iframe {
        width: 50%;
        min-width: 300px;
        height: 350px;
    }
    .localizacao-texto {
        padding: 60px;
        width: 50%;
        text-align: left;
        FONT-SIZE: 1.2rem;
        margin-bottom: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
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
    <div class="quem-somos-texto">
        <h2>Quem Somos</h2>
        <p>Bem-vindo à Sabor Caseiro, sua melhor opção para bolos artesanais e deliciosos!
        Nosso objetivo é proporcionar a melhor experiência em cada fatia, usando ingredientes frescos e receitas caseiras.
        Peça já o seu bolo e experimente o sabor caseiro!
        Para mais informações, entre em contato conosco. Estamos aqui para atender você!
        Telefone: (44) 98411-2718</p>
    </div>
    <img src="/SaborCaseiro/img/confeiteira.png" alt="Confeiteira">
  
</section>

<section class="localizacao">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.854273981125!2d-52.39428872386942!3d-24.03620347847644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed751b68fd1bed%3A0x3820d1faf45dff93!2sR.%20Franz%20Kaiser%2C%201124%20-%20Jardim%20Copacabana%2C%20Campo%20Mour%C3%A3o%20-%20PR%2C%2087302-310!5e0!3m2!1spt-BR!2sbr!4v1750480642489!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="localizacao-texto">
        <h2>Localização</h2>
        <p>Estamos localizados na Rua Franz Kaiser, 1124 - Jardim Copacabana, Campo Mourão - PR, 87302-310. Venha nos visitar!</p>
    </div>
  
</section>
</body>
</html>