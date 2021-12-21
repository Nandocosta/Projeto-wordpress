<footer>
    <div class="formulario" class="row">
        <div class="fcard" class="h-100 " >
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="form">
            <h2>Fale conosco!</h2>
            <br>
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>
        </div>
    </div>
    <div class="rodape">
        <div>
            <p>Todos os direito reservados</p>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php wp_footer();?>
</body>
</html>