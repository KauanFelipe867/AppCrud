<?php
include 'produto_controller.php';
include 'navbar.php'; 


//Pega todos os usuários para preencher os dados da tabela
$prods = getProds();

//Variável que guarda o ID do usuário que será editado
$prodToEdit = null;

// Verifica se existe o parâmetro edit pelo método GET
// e sé há um ID para edição de usuário
if (isset($_GET['edit'])) {
    $prodToEdit = getProd($_GET['edit']);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    
    <title>CRUD de Produtos</title>
    <script>
       
    </script>
</head>
<body>
    <!-- Insere o JavaScript -->
    <script src="java/main.js"></script>

    <h2 class="ml-5 mt-4 mb-3">Cadastro de Produtos</h2>
        <div class="container mx-5">
            <form method="POST" action="">
                <div class="container-fluid">
                    <input type="hidden" id="id" name="id" value="<?php echo $prodToEdit['id'] ?? ''; ?>">
                </div>

                <div class="container-fluid">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $prodToEdit['nome'] ?? ''; ?>" class="rounded border border-dark" required><br><br>
                </div>

                <div class="container-fluid">
                    <label for="descricao" class="form-label">Descricao:</label>
                    <input type="text" id="descricao" name="descricao" class="form-control" value="<?php echo $userToEdit['descricao'] ?? ''; ?>" class="rounded border border-dark" required><br><br>
                </div>

                <div class="container-fluid">
                    <label for="marca" class="form-label">Marca:</label>
                    <input type="text" id="marca" name="marca" class="form-control" value="<?php echo $prodToEdit['marca'] ?? ''; ?>" class="rounded border border-dark" required><br><br>
                </div>

                <div class="container-fluid">
                    <label for="modelo" class="form-label">Modelo:</label>
                    <input type="text" id="modelo" name="modelo" class="form-control" value="<?php echo $prodToEdit['modelo'] ?? ''; ?>" class="rounded border border-dark" required><br><br>
                </div>

                <div class="container-fluid">
                    <label for="valorunitario" class="form-label">Valor Unitario:</label>
                    <input type="number" id="valorunitario" name="valorunitario" class="form-control" value="<?php echo $prodToEdit['valorunitario'] ?? ''; ?>" class="rounded border border-dark" required><br><br>
                </div>

                <div class="container-fluid">
                    <label for="categoria" class="form-label">Categoria:</label>
                    <input type="text" id="categoria" name="categoria" class="form-control" value="<?php echo $prodToEdit['nome'] ?? ''; ?>" class="rounded border border-dark" required><br><br>
                </div>

                <div class="container-fluid">
                    <label for="url_img" class="form-label">Url_Img:</label>
                    <input type="text" id="url_img" name="url_img" class="form-control" value="<?php echo $prodToEdit['url_img'] ?? ''; ?>" class="rounded border border-dark" required><br><br>
                </div>

                <div class="container-fluid">
                    <label for="ativo" class="form-label">Ativo:</label>
                    <input type="checkbox" id="ativo" name="ativo" class="form-control" value="<?php echo $prodToEdit['ativo'] ?? ''; ?>" class="rounded border border-dark" required><br><br>
                </div>

                <div class="container-fluid">
                    <button type="submit" class = "btn btn-info ml-1" name="save">Salvar</button>
                    <button type="submit" class = "btn btn-info" name="update">Atualizar</button>
                    <button type="button" class = "btn btn-info" onclick="clearForm()">Novo</button>
                </div>
            </form>
        </div>
    <h2 class="ml-5 mt-4">Produtos Cadastrados</h2>
    
    <div class="container-fluid px-5">
        <table class="table table-info table-hover my-4">
            <tr>
                <th class="table-primary">ID</th>
                <th class="table-primary">Nome</th>
                <th class="table-primary">Descricao</th>
                <th class="table-primary">Marca</th>
                <th class="table-primary">Modeelo</th>
                <th class="table-primary">Valor Unitario</th>
                <th class="table-primary">Categoria</th>
                <th class="table-primary">Url_img</th>
                <th class="table-primary">Ativo</th>
                <th class="table-primary">Ações</th>
            </tr>
            <!--Faz um loop FOR no resultset de usuários e preenche a tabela-->
            <?php foreach ($prods as $prod): ?>
                <tr>
                    <td><?php echo $prod['id']; ?></td>
                    <td><?php echo $prod['nome']; ?></td>
                    <td><?php echo $prod['descricao']; ?></td>
                    <td><?php echo $prod['marca']; ?></td>
                    <td><?php echo $prod['modelo']; ?></td>
                    <td><?php echo $prod['valorunitario']; ?></td>
                    <td><?php echo $prod['categoria']; ?></td>
                    <td><?php echo $prod['url_img']; ?></td>
                    <td><?php echo $prod['ativo']; ?></td>
                    <td>
                        <a href="?edit=<?php echo $prod['id']; ?>">Editar</a>
                        <a href="?delete=<?php echo $prod['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    
   <?php
   include 'footer2.php';
   ?>
</body>
</html>