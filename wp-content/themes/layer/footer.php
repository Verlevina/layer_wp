<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package layer
 */

?>


  </main>
</div>
<footer class="main-footer">
  <div class="container">
	<?php
			if ( !is_front_page() && !is_home() ) :
				?>
      <a class="main-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      	<?php endif?>
        <?php dynamic_sidebar( 'logo' ); ?>
        	<?php
			if ( !is_front_page() && !is_home() ) :
				?>
      </a>
<?php endif?>
  <?php dynamic_sidebar( 'contacts' ); ?>

    <button class="modal-button" type="button">
      Остались вопросы?<br>
      Напишите мне!
    </button>
  </div>
</footer>
<section class='modal'>
  <button class='close-modal' type='button'>
    x
    <span class='visually-hidden'>Закрыть</span>
  </button>
 
  <?php echo do_shortcode('[contact-form-7 id="104" title="Contact form 1"]'); ?>

</section>

<?php wp_footer(); ?>
</body>
</html>