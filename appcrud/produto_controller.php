<?php
include 'db.php';

function saveProd($nome, $descricao, $marca, $modelo, $valorunitario, $categoria, $url_img, $ativo) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO produtos (nome, descricao, marca, modelo, valorunitario, categoria, url_img, ativo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssdssii", $nome, $descricao, $marca, $modelo, $valorunitario, $categoria, $url_img, $ativo);
    return $stmt->execute();
}

function getProds() {
    global $conn;
    $result = $conn->query("SELECT * FROM produtos");
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getProd($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM produtos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function updateProd($id, $nome, $telefone, $email, $senha) {
    global $conn;
    $stmt = $conn->prepare("UPDATE produtos SET nome = ?, descricao = ?, marca = ?, modelo = ?, valoruitario = ?, categoria = ?, url_img = ?, ativo = ? WHERE id = ?");
    $stmt->bind_param("ssssdssii", $nome, $descricao, $marca, $modelo, $valorunitario, $categoria, $url_img, $ativo, $id);
    return $stmt->execute();
}

function deletePrd($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM produtos WHERE id = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['save'])) {
        $ativo = isset($POST['ativo'])
        saveProd($_POST['nome'], $_POST['descricao'], $_POST['marca'], $_POST['modelo'], $_POST['valorunitario'], $_POST['categoria'], $_POST['url_img'], $_POST['ativo']);
    } elseif (isset($_POST['update'])) {
        updateProd($_POST['nome'], $_POST['descricao'], $_POST['marca'], $_POST['modelo'], $_POST['valorunitario'], $_POST['categoria'], $_POST['url_img'], $_POST['ativo']);
    }
}

// Processamento da exclusão
if (isset($_GET['delete'])) {
    deleteProd($_GET['delete']);
}
?>