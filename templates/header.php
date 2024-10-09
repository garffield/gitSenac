<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="shortcut icon" href="./templates/icones/headerlogo.png" type="image/x-icon">
    <title>141 SPORTS</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');


        * {
            list-style: none;
            text-decoration: none;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        a {
            color: #fff;
            text-decoration: none;
        }

        header {

            display: flex;
            justify-content: space-around;
            justify-content: space-between;
            background-color: rgb(0, 0, 0);
            background-image: linear-gradient(to bottom, #000000, #006414);
            height: 100px;
            align-items: center;
        }

        nav {
            height: 18px;
        }

        .logo {
            padding-left: 20px;
            padding-top: 20px;
        }

        .perfil {
            filter: invert(100%);
            padding-right: 20px;
        }

        .nav-list {
            list-style: none;
            display: flex;
            align-items: center;
        }

        .nav-list li {
            letter-spacing: 3px;
            margin-left: 32px;
        }

        ul .nav-list li a {
            font-family: 'Inter', sans-serif;
        }
    </style>

</head>

<body>
    <header>

        <div class="logo">
            <a href="#">
                <img src="./templates/icones/headerlogo.png" alt="logo" width="90px" height="90px">
            </a>
        </div>

        <nav>
            <ul class="nav-list">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Brasileirão</a></li>
                <li><a href="#">Seleções</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Sobre Nós</a></li>
            </ul>
        </nav>
        <div class="perfil">
            <a href="">
                <img src="./templates/icones/headerperfil.png" alt="perfil" width="50px" height="50px">
            </a>
        </div>
    </header>
</body>
</html>