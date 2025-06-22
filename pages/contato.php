<style>
    *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
</style>



<section id="contato" class="container my-5">
    <h2 class="text-center mb-4">Fale Conosco</h2>
    <form action="enviar.php" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome">Nome completo</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="telefone">Telefone</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" required>
            </div>
            <div class="form-group col-md-6">
                <label for="assunto">Assunto</label>
                <input type="text" class="form-control" id="assunto" name="assunto" required>
            </div>
        </div>

        <div class="form-group">
            <label for="endereco">Endereço de entrega</label>
            <input type="text" class="form-control" id="endereco" name="endereco" required>
        </div>

        <div class="form-group">
            <label for="mensagem">Mensagem / Observações</label>
            <textarea class="form-control" id="mensagem" name="mensagem" required rows="4" ></textarea>
        </div>

        <button  type="submit" class="btn btn-danger mb-3 mt-4">Enviar</button>
    </form>
</section>


<h2 class="text-center my-4">Obrigado pelo seu contato!</h2>

<script>
document.querySelector("form").addEventListener("submit", function(event) {
    event.preventDefault(); // 
    alert("Mensagem enviada com sucesso!");
    this.reset(); // 
    
});


</script>