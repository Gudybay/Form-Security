<?php
    include('config.php');

   if($_POST['acao']){
       $nome = $_POST['nome'];
       $email = $_POST['email'];
       $telefone = $_POST['telefone'];
       $sql = MySql::conectar()->prepare("INSERT INTO `tb_admin.usuarios` VALUES (null,?,?,?)");
       $sql->execute(array($nome,$email,$telefone));
            header('location:'.INCLUDE_PATH);
   };   


?>  
<!DOCTYPE html>
<head>
    <title>Gudybay</title>
    <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>css/style.css" />
</head>
<body>
<section>
    <!-- FORMULÁRIO EXEMPLO, FORMATE O CONFIG PRA CARREGAR O ESTILO! -->
        <div class="container-banner">
            <div class="center">
                <div>
                    <div class="container-list">
                        <ul>
                            <h2>PROMOÇÃO DE LANÇAMENTO</h2>
                            <li>SITE E-COMMERCE</li>
                            <li>LADDING PAGE</li>
                            <li>FUNCIONANDO EM TODOS DISPOSITIVOS</li>
                            <li>100% ORIGINAL</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="form">
                        <h2>Preencha o formulário</h2>
                        <form method="POST">
                            <div class="input-container">
                                <span>Nome*</span>
                                <input type="text" name="nome" required />
                            </div>
                            <div class="input-container">
                                <span>E-mail*</span>
                                <input type="text" name="email" required />
                            </div>
                            <div class="input-container">
                                <span>Telefone*</span>
                                <input type="text" name="telefone" required />
                            </div>

                            <p class="warning">Campos são obrigatorios*</p>
                            <div class="submit-container">
                                <input type="submit" name="acao" value="Enviar" />
                            </div>
                        </form>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>