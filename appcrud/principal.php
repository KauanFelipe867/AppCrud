<?php 
include 'principal_controller.php'; 

// Pega todos os produtos para preencher os dados da tabela 
$produtos = getProdutos();
?>

<?php include 'navbar.php'; ?>

<div class="flex-grow-1">
        <!-- Conteúdo da página vai aqui -->
        <h2 class="mx-5 my-4">Olá, <?php echo htmlspecialchars($nome); ?>!</h2>

        <!--<form method="POST" action="">
            <input type="submit" name="logout" value="Logout">
        </form>-->
    </div>

<div class="container">
    <div class="flex-grow-1">
        <!--<h3>OlÃ¡, <?php echo htmlspecialchars($nome); ?>!</h3>

        <form method="POST" action="">
            <input type="submit" name="logout" value="Logout">
        </form>-->
    </div>
</div>
<div class="container p-2">
    <?php foreach ($produtos as $produto): ?>    
        <div class="card  float-left mx-4" style="width: 18rem;">
            <img src="<?php echo $produto['url_img']; ?>" class="rounded mx-auto d-block mt-3" alt="Imagem do Produto" style="width: 100px;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $produto['nome']; ?></h5>
                <p class="card-text"><?php echo $produto['descricao']; ?></p>
                <p><strong>Preço:</strong> R$ <?php echo number_format($produto['valorunitario'], 2, ',', '.'); ?></p>
                <!-- FormulÃ¡rio para adicionar ao carrinho -->
                <form method="POST" action="principal.php">
                    <input type="hidden" name="id_produto" value="<?php echo $produto['id']; ?>">
                    <button type="submit" name="adicionar_produto" class="btn btn-primary btn-block">Comprar</button>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php include 'footer2principal.php'; ?>