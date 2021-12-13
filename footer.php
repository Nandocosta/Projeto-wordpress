<div class="footer" ;>
    <div class="fcard">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="form-card">
        <h2>Fale conosco</h2>
        <br>
        <?php echo FrmFormsController::get_form_shortcode(array('id' => 2,'key' => '', 'title' => false, 'description' => false, 
        'readonly' => false, 'emtry_id' => false));?>
    </div>
</div>
<div class="rodape">
    <p>Todos os direito reservados</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php get_footer();?>
</body>
</html>