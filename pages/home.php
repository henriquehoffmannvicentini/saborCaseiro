<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner1.png" class="d-block w-100  mt-5" alt="Banner 1">
    </div>
    <div class="carousel-item">
      <img src="img/banner2.png" class="d-block w-100  mt-5" alt="Banner 2">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden" style="color: #000;">Next</span>
  </button>
</div>

<h2 class="text-center mt-5 mb-4 ">
    Bolos em Destaque
</h2>

<div class="row mb-5  ">
    <?php

      if (!empty($produtos)) {
        foreach ($produtos as $id => $valor) {
          
          if (
            (isset($valor["destaque"]) && (
              strtolower($valor["destaque"]) === "sim" ||
              $valor["destaque"] === true ||
              $valor["destaque"] === 1 ||
              $valor["destaque"] === "1"
            ))
          ) {
            echo "<div class='col-12 col-md-3 '>
              <div class='card  p-2 text-dark  mb-3'>
                <img src='{$valor['foto']}' class='w-100'>
                <p>{$valor['nome']}</p>
                <p><strong>R$ " . number_format($valor['valor'], 2, ',', '.') . "</strong></p>
                <p>
                  <a href='produto/{$id}' class='btn btn-danger'>encomendar</a>
                </p>
              </div>
            </div>";
          }
        }
      } else {
        echo "<p class='text-center'>Nenhum produto em destaque encontrado.</p>";
      }
    ?>
        
    
</div>