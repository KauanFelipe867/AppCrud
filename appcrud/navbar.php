<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      
</head>
<body>

    <nav class="navbar bg-warning navbar-light navbar-expand-sm rounded sticky-top">
        <div class="container-fluid py-3">
        <img src="img/Logo.png" alt="" whidth="50px" height="50px">
            <a href="" class="navbar-brand ml-3">Sistema eComerce</a>
                <div class="collapse navbar-collapse">
                    <div class="navbar-nav">
                    <a href="principal.php" class="nav-link">Home</a>
                    <a href="usuarios_cadastro.php" class="nav-link">Usuários</a>
                    <a href="produto_cadastro.php" class="nav-link">Produtos</a>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="menuNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form method="POST" action="">
                        <a class="btn btn-link nav-link float-left" href="shopcart.php"><i class="bi bi-cart text-white"></i></a>
                        
                    </form>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="menuNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form method="POST" action="">
                    <button class="btn btn-link nav-link text-black mx-5" name="logout" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <!--<div class="container mt-3">
        <p class="lead">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Tempora corrupti sint qui sit laboriosam dolor distinctio commodi 
            modi nam doloremque tenetur non dolorem ea fugiat accusantium sed sunt quae 
            debitis, hic nulla quibusdam atque, pariatur nemo quia. Iure ex quis voluptas. 
            Voluptatum enim in eaque repellat ipsa distinctio cupiditate architecto dignissimos! 
            Velit ad temporibus tenetur accusamus, alias neque cumque commodi provident, dolorum 
            perferendis ipsam doloremque placeat distinctio corporis, exercitationem consectetur illo! 
            Sunt dolor explicabo beatae amet odio dicta minima minus voluptatum fugiat quidem quod, fuga 
            laboriosam quibusdam consequatur dolore debitis. Commodi corporis voluptatibus non laborum a 
            temporibus incidunt fugit id.
        </p>

        <p class="lead">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Tempora corrupti sint qui sit laboriosam dolor distinctio commodi 
            modi nam doloremque tenetur non dolorem ea fugiat accusantium sed sunt quae 
            debitis, hic nulla quibusdam atque, pariatur nemo quia. Iure ex quis voluptas. 
            Voluptatum enim in eaque repellat ipsa distinctio cupiditate architecto dignissimos! 
            Velit ad temporibus tenetur accusamus, alias neque cumque commodi provident, dolorum 
            perferendis ipsam doloremque placeat distinctio corporis, exercitationem consectetur illo! 
            Sunt dolor explicabo beatae amet odio dicta minima minus voluptatum fugiat quidem quod, fuga 
            laboriosam quibusdam consequatur dolore debitis. Commodi corporis voluptatibus non laborum a 
            temporibus incidunt fugit id.
        </p>

        <p class="lead">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Tempora corrupti sint qui sit laboriosam dolor distinctio commodi 
            modi nam doloremque tenetur non dolorem ea fugiat accusantium sed sunt quae 
            debitis, hic nulla quibusdam atque, pariatur nemo quia. Iure ex quis voluptas. 
            Voluptatum enim in eaque repellat ipsa distinctio cupiditate architecto dignissimos! 
            Velit ad temporibus tenetur accusamus, alias neque cumque commodi provident, dolorum 
            perferendis ipsam doloremque placeat distinctio corporis, exercitationem consectetur illo! 
            Sunt dolor explicabo beatae amet odio dicta minima minus voluptatum fugiat quidem quod, fuga 
            laboriosam quibusdam consequatur dolore debitis. Commodi corporis voluptatibus non laborum a 
            temporibus incidunt fugit id.
        </p>

        <p class="lead">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Tempora corrupti sint qui sit laboriosam dolor distinctio commodi 
            modi nam doloremque tenetur non dolorem ea fugiat accusantium sed sunt quae 
            debitis, hic nulla quibusdam atque, pariatur nemo quia. Iure ex quis voluptas. 
            Voluptatum enim in eaque repellat ipsa distinctio cupiditate architecto dignissimos! 
            Velit ad temporibus tenetur accusamus, alias neque cumque commodi provident, dolorum 
            perferendis ipsam doloremque placeat distinctio corporis, exercitationem consectetur illo! 
            Sunt dolor explicabo beatae amet odio dicta minima minus voluptatum fugiat quidem quod, fuga 
            laboriosam quibusdam consequatur dolore debitis. Commodi corporis voluptatibus non laborum a 
            temporibus incidunt fugit id.
        </p>

        <p class="lead">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Tempora corrupti sint qui sit laboriosam dolor distinctio commodi 
            modi nam doloremque tenetur non dolorem ea fugiat accusantium sed sunt quae 
            debitis, hic nulla quibusdam atque, pariatur nemo quia. Iure ex quis voluptas. 
            Voluptatum enim in eaque repellat ipsa distinctio cupiditate architecto dignissimos! 
            Velit ad temporibus tenetur accusamus, alias neque cumque commodi provident, dolorum 
            perferendis ipsam doloremque placeat distinctio corporis, exercitationem consectetur illo! 
            Sunt dolor explicabo beatae amet odio dicta minima minus voluptatum fugiat quidem quod, fuga 
            laboriosam quibusdam consequatur dolore debitis. Commodi corporis voluptatibus non laborum a 
            temporibus incidunt fugit id.
        </p>

        <p class="lead">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Tempora corrupti sint qui sit laboriosam dolor distinctio commodi 
            modi nam doloremque tenetur non dolorem ea fugiat accusantium sed sunt quae 
            debitis, hic nulla quibusdam atque, pariatur nemo quia. Iure ex quis voluptas. 
            Voluptatum enim in eaque repellat ipsa distinctio cupiditate architecto dignissimos! 
            Velit ad temporibus tenetur accusamus, alias neque cumque commodi provident, dolorum 
            perferendis ipsam doloremque placeat distinctio corporis, exercitationem consectetur illo! 
            Sunt dolor explicabo beatae amet odio dicta minima minus voluptatum fugiat quidem quod, fuga 
            laboriosam quibusdam consequatur dolore debitis. Commodi corporis voluptatibus non laborum a 
            temporibus incidunt fugit id.
        </p>
    </div>-->

</body>
