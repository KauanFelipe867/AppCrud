<?php
// Inicia a sessão se ainda não foi iniciada
//if (session_status() == PHP_SESSION_NONE) {
  //  session_start();
//}

// Inclui o arquivo de autenticação para verificar login
//include 'auth.php';
//verificarLogin();  // Verifica se o usuário está logado

// Inclui o arquivo de conexão com o banco de dados
include 'db.php';

// Função para salvar um novo produto
function saveProd($nome, $descricao, $marca, $modelo, $valorUnitario, $categoria, $url_img, $ativo) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO produtos (nome, descricao, marca, modelo, valorunitario, categoria, url_img, ativo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssdssi", $nome, $descricao, $marca, $modelo, $valorUnitario, $categoria, $url_img, $ativo);
    return $stmt->execute();
}

// Função para obter todos os produtos
function getProds() {
    global $conn;
    $result = $conn->query("SELECT * FROM produtos");
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Função para obter um produto por ID
function getProd($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM produtos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

// Função para atualizar um produto
function updateProd($id, $nome, $descricao, $marca, $modelo, $valoruUnitario, $categoria, $url_img, $ativo) {
    global $conn;
    $stmt = $conn->prepare("UPDATE produtos SET nome = ?, descricao = ?, marca = ?, modelo = ?, valorunitario = ?, categoria = ?, url_img = ?, ativo = ? WHERE id = ?");
    $stmt->bind_param("issssdssi", $nome, $descricao, $marca, $modelo, $valorUnitario, $categoria, $url_img, $ativo, $id);
    return $stmt->execute();
}

// Função para excluir um produto
function deleteProd($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM produtos WHERE id = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

// Processamento de dados do formulário (criar ou editar produto)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['save'])) {
        saveProd($_POST['nome'], $_POST['descricao'], $_POST['marca'], $_POST['modelo'], $_POST['valorunitario'], $_POST['categoria'], $_POST['url_img'], $_POST['ativo']);
    } elseif (isset($_POST['update'])) {
        updateProd($_POST['id'], $_POST['nome'], $_POST['descricao'], $_POST['marca'], $_POST['modelo'], $_POST['valorunitario'], $_POST['categoria'], $_POST['url_img'], $_POST['ativo']);
    }
}

// Exclusão de produto
if (isset($_GET['delete'])) {
    deleteProd($_GET['delete']);
}


?>