<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>Facebook</h2>
            </div>
            <form method="post" class="form-login">
                <div class="form-element">
                    <p>E-mail ou telefone</p>
                    <input type="email">
                </div>
                <div class="form-element">
                    <p>Senha</p>
                    <input type="password">
                </div>
                <div class="form-element">
                    
                    <input type="submit" name="acao" value="Enviar">
                </div>
            </form>
            <div class="clear"></div>
        </div>
    </header>
    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <img src="imagem/pessoas.png" alt="">
            </div>
            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
                <h3>É gratuito e sempre será!</h3>
                <form class="criar-conta">
                    <div class="w50">
                        <input placeholder="Nome" type="text">
                    </div>
                    <div class="w50-nome">
                        <input placeholder="Sobrenome" type="text">
                    </div>
                    <div class="w100">
                        <input placeholder="E-mail" type="email">
                    </div>
                    <div class="w100">
                        <input placeholder="Senha" type="password">
                    </div>

                    <div class="w100">
                        <h2>Data de Nascimento:</h2>
                        <select name="nascimento-dia" class="nascimento">
                            <?php
                                for($i = 1; $i <=31; $i++){
                            ?>        
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select name="nascimento-mes" class="nascimento">
                            <option value="0">Junho</option>
                        </select>
                            
                       
                        
                        <select name="nascimento-ano" class="nascimento">
                            <?php
                            for($i = 1960; $i <=2023; $i++){
                            ?>        
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <div class="clear"></div>
                    </div>
                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="masculino">
                            <h2>Masculino</h2>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="feminino">
                            <h2>Feminino</h2>
                        </div>
                        
                    </div>
                    <div class="clear"></div>
                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastrar!">
                    </div>
                    <div class="clear"></div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </section>
    <section class="linguas">
        <div class="center">
            <a href="#" class="selected-lingua">Português (BR)</a>
            <a href="#">English (US)</a>
            <a href="#">Español</a>
            <a href="#">Français (France)</a>
            <a href="#">Italiano</a>
            <a href="#">Deutsch</a>
            <a href="#">العربية</a>
        </div>
        <div style="border:0;padding:10px" class="center">
            <a href="#">Cadastre-se</a>
            <a href="#">Entrar</a>
            <a href="#">Messenger</a>
            <a href="#">Facebook Lite</a>
            <a href="#">Watch</a>
            <a href="#">Locais</a>
            <a href="#">Jogos</a>
            <a href="#">Marketplace</a>
            <a href="#">Meta Pay</a>
            <a href="#">Loja da Meta</a>
            <a href="#">Meta Quest</a>
    </section>
    
</body>
</html>