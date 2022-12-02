<?php include('../header.php');?>
    <link href="css/contato.css" rel="stylesheet">
    <section class="contato" id="contato">
        <div class="container">
            <div class="title"><h2>Contato</h2></div>
            <div class="contato-wrapper">
                <form action="https://formsubmit.co/aribotinas@gmail.com" method="POST">
                    <input required type="text" name="name" placeholder="Nome..." />
                    <input required type="text" name="telefone" id="telefone" placeholder="Telefone..." maxlength="15"/>
                    <input required type="email" name="email" placeholder="E-mail..." />
                    <textarea name="message" placeholder="Deixe sua mensagem... (Opcional)"></textarea>
                    <input class="end" type="submit" name="button" value="Enviar" />
                    <!--Form Submit-->
                    <input type="hidden" name="_next" value="">
                    <input type="hidden" name="_captcha" value="false">
                    <input type="text" name="_honey" style="display:none">
                    <!--<input type="hidden" name="_cc" value="huxdavi@gmail.com">-->
                    <!--<input type="hidden" name="_cc" value="hs.corpp@gmail.com">-->
                    <input type="hidden" name="_subject" value="Nova mensagem!">
                    <input type="hidden" name="_template" value="table">
                    <input type="hidden" name="_next" value="https://hscorpooration.github.io/AristotelesBotinas/pages/obrigado.html">
                    <div class="sociais">
                        <h2>Ou pelas nossas redes:</h2>
                        <a href="https://api.whatsapp.com/send/?phone=5533998023970&text=Olá%2C+poderia+me+ajudar%3F&type=phone_number&app_absent=0" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/aristotelesbotinas/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a  href="tel://+5533998023970" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i></a>
                    </div><!--sociais-->
                </form><!--form-->
            </div><!--contato-wrapper-->
        </div><!--container-->
    </section><!--contato-->

    <?php include('../footer.php');?>