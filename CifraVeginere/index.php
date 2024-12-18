<?php

?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="ALC">
        <title>Cifra de Veginére</title>
       
        <link href="static/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            body {
                display: flex;
                align-items: center;
                padding-top: 10px;
                padding-bottom: 10px;
                background-color: #f5f5f5;
            }
            .form-signin {
                width: 100%;
                max-width: 550px;
                padding: 15px;
                margin: auto;
            }
        </style>
    </head>
    <body class="text-center">
        <main class="form-signin">
            <h3 class="h3 mb-3 fw-normal">Cifra de Veginére</h3>
            <p style="text-align: justify;">A cifra de Vigenère é uma técnica de criptografia por substituição polialfabética, baseada no uso de uma palavra-chave para criptografar e descriptografar mensagens. Foi inventada por Blaise de Vigenère no século XVI e é mais segura do que a cifra de César porque utiliza múltiplos alfabetos. <br>
            Consiste em uma matriz de 26 linhas e 26 colunas, onde cada linha é uma rotação do alfabeto.</p>

            <p style="text-align: left;" ><b>Exemplo:</b> <br>
            <b>Mensagem Original:</b> SEGURANCA <br>

            <b>Palavra-Chave:</b> CHAVE <br>

            <b>Texto Cifrado:</b> ULGPVCUCV <br></p>

            <p style="text-align: justify;">Essa cifra é vulnerável a ataques caso a palavra-chave seja curta e o texto cifrado seja longo. Porém, é uma técnica interessante para entender os princípios de criptografia. </p>

            <form class="" enctype="multipart/form-data" method="POST" action="">

                <button type="button" class="btn btn-lg btn-primary w-100 mx-0 mb-2" onclick="window.location.href='cript.php'">Continuar</button>

                <div class="register-link">
                    <small class="text-muted"><a href="#" data-bs-toggle="modal" data-bs-target="#inf">Informação!</a></small>
                </div>
                <p class="mt-3 mb-3 text-muted">Todos Direitos Reservados UPM-SI &copy; 2024</p>
            </form>

            <div class="modal fade" id="inf" data-bs-backdrop="static" tabindex="-1" data-bs-keyboard="false" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content rounded-6 shadow">
                    <div class="modal-header border-bottom-0">
                      <h5 class="modal-title">Informação</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-0">
                      <p>Para cifrar ou decifrar a sua mensagem, clique no botão <b>Continuar</b> na página inicial ou no botão dessa janela. Em seguida, preencha os campos correspondentes a chave e ao texto que será cifrado ou decifrado. Depois de preenchidos os campos, selecione a ação desejada (cifrar ou decifrar). No fim será apresentada a mensagem original e a mensagem cifrada ou decifrada dependendo da ação escolhida.</p>
                    </div>

                    <div class="modal-footer flex-column border-top-0">
                        <button type="button" class="btn btn-lg btn-primary w-100 mx-0 mb-2" onclick="window.location.href='cript.php'">Continuar</button>
                    </div>
                  </div>
                </div>
            </div>
        </main>
        <script src="static/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
