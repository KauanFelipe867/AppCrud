<?php
include 'produto_controller.php';
include 'header.php';

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

    <h2 class="ml-5 mt-3 mb-3">Cadastro de Produtos</h2>
    <form method="POST" action="">
        <input type="hidden" id="id" name="id" value="<?php echo $prodToEdit['id'] ?? ''; ?>">
        
        <label for="nome" class = "ml-5">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $prodToEdit['nome'] ?? ''; ?>" class="rounded border border-dark" required><br><br>
        
        <label for="descricao" class = "ml-5">Descrição:</label>
        <input type="text" id="descricao" name="descricao" value="<?php echo $prodToEdit['descricao'] ?? ''; ?>" class="rounded border border-dark" required><br><br>
        
        <label for="marca" class = "ml-5">Marca:</label>
        <input type="text" id="marca" name="marca" value="<?php echo $prodToEdit['marca'] ?? ''; ?>" class="rounded border border-dark" required><br><br>
        
        <label for="modelo" class = "ml-5">Modelo:</label>
        <input type="text" id="modelo" name="modelo" value="<?php echo $prodToEdit['modelo'] ?? ''; ?>" class="rounded border border-dark" required><br><br>

        <label for="valorunitario" class = "ml-5">Valor Unitário:</label>
        <input type="decimal" id="valorunitario" name="valorunitario" value="<?php echo $prodToEdit['valorunitario'] ?? ''; ?>" class="rounded border border-dark" required><br><br>

        <label for="categoria" class = "ml-5">Categoria:</label>
        <input type="text" id="categoria" name="categoria" value="<?php echo $prodToEdit['categoria'] ?? ''; ?>" class="rounded border border-dark" required><br><br>

        <label for="url_img" class = "ml-5">URL_IMG:</label>
        <input type="text" id="url_img" name="url_img" value="<?php echo $prodToEdit['url_img'] ?? ''; ?>" class="rounded border border-dark" required><br><br>
        
        <label for="ativo" class = "ml-5">Ativo:</label>
        <input type="checkbox" id="ativo" name="ativo" value="<?php echo $prodToEdit['ativo'] ?? ''; ?>" class="rounded border border-dark" required><br><br>

        <button type="submit" class = "btn btn-info ml-5" name="save">Salvar</button>
        <button type="submit" class = "btn btn-info" name="update">Atualizar</button>
        <button type="button" class = "btn btn-info" onclick="clearForm()">Novo</button>
    </form>

    <h2 class="ml-5 mt-4 mb-4">Produtos Cadastrados</h2>
    <table border="1" class="mx-5 mb-3">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Valor Unitário</th>
            <th>Categoria</th>
            <th>URL_IMG</th>
            <th>Ativo</th>
            <th>Ações</th>
        </tr>
        <!--Faz um loop FOR no resultset de usuários e preenche a tabela-->
        <?php foreach ($prods as $prod): ?>
            <tr>
                <td><?php echo $prod['id']; ?></td>
                <td><?php echo $prod['nome']; ?></td>
                <td><?php echo $prod['descricao']; ?></td>
                <td><?php echo $prod['marca']; ?></td>
                <td><?php echo $prod['modelo']; ?></td>
                <td><?php echo number_format($prod['valorunitario'], 2, ',', '.'); ?></td>
                <td><?php echo $user['categoria']; ?></td>
                <td><img src="<?php echo $prod['url_img']; ?>" alt="Imagem do Produto" style="width: 100px;"></td>
                <td><?php echo $user['ativo'] ? 'Ativo' : 'Inativo'; ?></td>
                <td>
                    <a href="?edit=<?php echo $prod['id']; ?>">Editar</a>
                    <a href="?delete=<?php echo $prod['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
   <?php
   include 'footer.php';
   ?>
</body>
</html>