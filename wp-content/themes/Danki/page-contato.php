<?php 

//Template Name: Contato

?>
<?php get_header(); ?>
</div>
</section>
<?php the_content(); ?>
<section class="contato">
    <div class="center">
        <div class="w50 contato-info">
            <h2>A mais importante,<br />primeira conversa.</h2>
            <br />
            <p><b>Telefone:</b> (48) 9901-3620</p>
            <p><b>Telefone:</b> (48) 9901-3620</p>
            <p><b>Telefone:</b> (48) 9901-3620</p>

            <div class="mapa-container">
                <div id="mapa"></div>
            </div>
            <!--mapa-->
        </div>

        <div class="w50 contato-form">
            <form>
                <input placeholder="Nome" type="text" />
                <input placeholder="E-mail" type="text" />
                <input placeholder="Telefone" type="text" />
                <select>
                    <option>Geral</option>
                    <option>Suporte</option>
                </select>
                <textarea placeholder="Mensagem"></textarea>
                <input type="submit" value="Enviar!">
            </form>
        </div>
        <div class="clear"></div>
    </div>
</section>
<?php get_footer(); ?>