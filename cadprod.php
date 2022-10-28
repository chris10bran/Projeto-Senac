<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PROJETO SENAC</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/custom.css">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">ProgWeb</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.html">Cliente</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="produtos.html">Cadastro</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Sair</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="jumbotron light mb-4">
                    <div class="container">
                        <div class="row">
                         <div class="col-6">
                         <h1 class="display-3">Sistema ProgWeb</h1>
                         <p>Sistema completo com Bootstrap, php e MySQL</p>
                         </div>
                            
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <h1 class="mt-4">Cadastro do Cliente</h1>
                    <p>Insira os dados correitamente</p>
                    <form action="cadastro.php" method="POST">
                        <div class="mb-3">
                          <label for="nome" class="form-label">Nome</label>
                          <input type="text" name="nome" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Descrição</label>
                          <input type="text" name="desc" class="form-control" id="desc">
                        </div>
                        <div class="mb-3">
                          <label for="preco" class="form-label">Preço</label>
                          <input type="number" name="preco" class="form-control" id="preco">
                        </div>
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo</label>
                            <select name="tipo" id="tipo" class="form-select">
                              <option selected>Selecione o Produto</option>
                              <option value="Tipo 1">Tipo 1</option>
                              <option value="Tipo 2">Tipo 2</option>
                              <option value="Tipo 3">Tipo 3</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                      </form>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
