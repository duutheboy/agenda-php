<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

<div class="container">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col">
            <div class="card text-dark bg-light d-flex justify-content-center mt-5 shadow">
                <div class="card-header text-center">
                    <h5>Inserir Novo Cliente</h5>
                </div>
                <div class="card-body">
                    <form action="?page=salvar_clientes" method="POST"> <!-- Método POST para não aparecer a senha que o usuário digitou -->
                        <input type="hidden" name="acao" value="cadastrar_cliente"> <!-- Acão "cadastrar" irá oculta, o usuário não irá ver a url -->
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-person-fill"></i>
                            </span>
                            <input type="text" name="rzsocial" id="rzsocial" placeholder="Razão social" class="form-control" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-geo-alt-fill"></i>
                            </span>
                            <input type="text" name="end" id="end" placeholder="Endereço" class="form-control" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-building-fill-gear"></i>
                            </span>
                            <input type="number" name="cnpj" id="cnpj" placeholder="CNPJ" class="form-control" required required size="10" maxlength="10">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-telephone-fill"></i>
                            </span>
                            <input type="number" name="tel" id="tel" placeholder="Telefone" class="form-control" required>
                        </div>
                        <div class="text-center">
                            <button type="Submit" class="btn btn-success"><i class="bi bi-check2-square"></i> Inserir</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-2">
        </div>
    </div>
</div>