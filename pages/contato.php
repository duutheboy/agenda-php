<div class="container">
    <div class="row">
        <div class="col">
            <div class="card text-dark bg-light d-flex justify-content-center mt-5 shadow">
                <div class="card-header text-center">
                    <h6>Envie-nos uma mensagem!</h6>
                </div>
                <div class="card-body">
                    <form action="?page=salvar" method="POST"> <!-- Método POST para não aparecer a senha que o usuário digitou -->
                        <input type="hidden" name="acao" value="cadastrar"> <!-- Acão "cadastrar" irá oculta, o usuário não irá ver a url -->
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-envelope-at-fill"></i>
                            </span>
                            <input type="email" name="email" id="email" placeholder="E-mail" class="form-control" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-person-fill"></i>
                            </span>
                            <input type="text" name="nome" id="nome" placeholder="Nome" class="form-control" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                            <textarea class="form-control" rows="5" aria-label="Mensagem"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="Submit" class="btn btn-success mt-4" placeholder="Mensagem">Enviar mensagem</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container col-6">
        <div class="card text-dark bg-light d-flex justify-content-center mt-5 shadow">
                <div class="card-header text-center"><h6><i class="bi bi-geo-alt-fill"></i> Nosso endereço</h6></div><div class="card-body">
            <iframe class="mt-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2713.807574615882!2d-34.87236520893643!3d-8.064446634223104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18a48f03c145%3A0xef4ac38fd080a24!2sPra%C3%A7a%20do%20Marco%20Zero!5e0!3m2!1spt-BR!2sbr!4v1700978792249!5m2!1spt-BR!2sbr" width="484" height="280" style="border: 2px;;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
        </div></div></div>
    </div>
</div>