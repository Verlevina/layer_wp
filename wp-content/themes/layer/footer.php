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

<?php wp_footer(); ?>

</body>
</html>
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
</body>
</html>