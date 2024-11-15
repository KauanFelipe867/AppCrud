<?php
include 'usuarios_controller.php';
include 'header.php';

//Pega todos os usuários para preencher os dados da tabela
$users = getUsers();

//Variável que guarda o ID do usuário que será editado
$userToEdit = null;

// Verifica se existe o parâmetro edit pelo método GET
// e sé há um ID para edição de usuário
if (isset($_GET['edit'])) {
    $userToEdit = getUser($_GET['edit']);
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
    <title>CRUD de Usuários</title>
    <script>
       
    </script>
</head>
<body>
    <!-- Insere o JavaScript -->
    <script src="java/main.js"></script>

    <h2 class="ml-5 mt-3 mb-3">Cadastro de Usuários</h2>
    <form method="POST" action="">
        <input type="hidden" id="id" name="id" value="<?php echo $userToEdit['id'] ?? ''; ?>">
        
        <label for="nome" class = "ml-5">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $userToEdit['nome'] ?? ''; ?>" class="rounded border border-dark" required><br><br>
        
        <label for="telefone" class = "ml-5">Telefone:</label>
        <input type="text" id="telefone" name="telefone" value="<?php echo $userToEdit['telefone'] ?? ''; ?>" class="rounded border border-dark" required><br><br>
        
        <label for="email" class = "ml-5">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $userToEdit['email'] ?? ''; ?>" class="rounded border border-dark" required><br><br>
        
        <label for="senha" class = "ml-5">Senha:</label>
        <input type="password" id="senha" name="senha" class="rounded border border-dark" required><br><br>
        
        <button type="submit" class = "btn btn-info ml-5" name="save">Salvar</button>
        <button type="submit" class = "btn btn-info" name="update">Atualizar</button>
        <button type="button" class = "btn btn-info" onclick="clearForm()">Novo</button>
    </form>

    <h2 class="ml-5 mt-4 mb-4">Usuários Cadastrados</h2>
    <table border="1" class="mx-5 mb-3">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <!--Faz um loop FOR no resultset de usuários e preenche a tabela-->
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['nome']; ?></td>
                <td><?php echo $user['telefone']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <a href="?edit=<?php echo $user['id']; ?>">Editar</a>
                    <a href="?delete=<?php echo $user['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
   <?php
   include 'footer.php';
   ?>
</body>
</html>