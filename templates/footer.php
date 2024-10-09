<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        footer {
            background-color: #000000;
            display: flex;
            justify-content: space-between;

        }

        .parceiros {
            font-size: 20px;
            color: #fff
        }

        .direitos {
            color: #fff;
        }

        .left-side {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: fit-content;
            height: fit-content;
            margin-top: auto;
            margin-bottom: auto;

        }

        .mid {
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: fit-content;
            height: fit-content;
            margin-top: auto;
            margin-bottom: auto;
        }

        .email {
            display: flex;
        }

        .zap {
            display: flex;
        }

        .right-side {
            height: fit-content;
            width: fit-content;
        }

        a {
            display: flex;
            align-items: center;
        }
    </style>

</head>

<body>
    <footer>

        <section class="left-side">

            <div class="parceiros">
                Parceiros
            </div>

            <div class="patrocinadores">
                <img src="./templates/icones/parceiros.png" alt="">
            </div>

            <div class="direitos">
                <p>WWW.141SPORTS.COM.BR ©️ 2024TODOS DIREITOS RESERVADOS</p>
            </div>

        </section>

        <section class="mid">

            <div class="email">
                <a href="#">
                    <img src="./templates/icones/email1.png" width="31px" height="31px" alt="email">
                    <p>CONTATO@141SPORTS.COM.BR</p>
                </a>
            </div>

            <div class="zap">
                <a href="#">
                    <img src="./templates/icones/whatsapp.png" width="31px" height="31px" alt="whatsapp">
                    <p>+556799999-9999</p>
                </a>
            </div>

        </section>

        <section class="right-side">
            <img src="./templates/icones/LogoHub.png" width="237" height="162" alt="senac">
        </section>

    </footer>
</body>

</html>