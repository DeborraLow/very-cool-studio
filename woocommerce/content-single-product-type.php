<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>
<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php 
			the_title( '<h1 class="entry-title">', '</h1>' );
			the_meta();
			?>
	</header><!-- .entry-header -->
	<div class="post-content">
		<?php the_content(); ?>
			<div class="type-tester"> 
		<span contenteditable="true" id="type-tester-editable" class="fontselect fontsize fontweight de 64 textfield <?php echo $post->post_name;?>">Click here to try it!</span> 
		<div class="type-tester-title">
			<h4 class="entry-title"><?php the_title(); ?></h4>
			<h5><?php echo get_the_excerpt(); ?></h5>
			<h4 class="price h4"><?php global $product; echo $product->get_price_html(); ?>
			<meta itemprop="price" content="<?php echo esc_attr( $product->get_price() ); ?>" />
			<meta itemprop="priceCurrency" content="<?php echo esc_attr( get_woocommerce_currency() ); ?>" /></h4>
		</div>
		<!-- Selector for if I want to be able to change font family in the future -->
		<?php /*<select class="" data-native-menu="false" id="font-family-select" name="typeface"> 
			<option value="<?php echo $post->post_name;?>"><?php the_title(); ?></option> 
		</select> */ ?> 
		<div class="type-tester-header">
			<input id="font-size-slider" type="range" min="10" max="100" value="48">
			<div class="select">
				<span class="arr"></span>
				<?php
				$tags = get_the_terms( $post->ID, 'product_tag' );

				$html = '<select class="" data-native-menu="false" id="font-weight-select" name="weight">';
				foreach ( $tags as $tag ) {
				    $tag_link = get_tag_link( $tag->term_id );
				    $html .= "<option value='{$tag->slug}'>";
				    $html .= "{$tag->name}</option> ";
				}
				$html .= '</select>';
				echo $html;
				?>
			</div>
			<div class="type-tester-ligatures type-tester-checkbox">
				<input id="font-ligatures" type="checkbox" name="ligatures" value="liga">
				Liga
				<script>
				/* ligatures */

				var btn = document.querySelector(".type-tester-ligatures"),
				    typetester = document.querySelector("span.fontselect"),
				    activeClassliga = "liga",
				    inputliga = document.querySelector("#font-ligatures");

				btn.addEventListener("click", function(e){
				  e.preventDefault();
				  typetester.classList.toggle(activeClassliga);
				  inputliga.classList.toggle('checked');
				});
				</script>
			</div>
			<div class="type-tester-alts type-tester-checkbox">
				<input id="font-alts" type="checkbox" name="alts" value="salt">
				Alts
				<script>
				/* ligatures */

				var btnalt = document.querySelector(".type-tester-alts"),
				    typetester = document.querySelector("span.fontselect"),
				    activeClassalts = "alts",
				    inputalts = document.querySelector("#font-alts");

				btnalt.addEventListener("click", function(e){
				  e.preventDefault();
				  typetester.classList.toggle(activeClassalts);
				  inputalts.classList.toggle('checked');
				});
				</script>
			</div>
			<div class="type-tester-swsh type-tester-checkbox">
				<input id="font-swsh" type="checkbox" name="swsh" value="salt">
				Swsh
				<script>
				/* ligatures */

				var btnalt = document.querySelector(".type-tester-swsh"),
				    typetester = document.querySelector("span.fontselect"),
				    activeClassswsh = "swsh",
				    inputswsh = document.querySelector("#font-swsh");

				btnalt.addEventListener("click", function(e){
				  e.preventDefault();
				  typetester.classList.toggle(activeClassswsh);
				  inputswsh.classList.toggle('checked');
				});
				</script>
			</div>
		</div>
		<div class="type-tester-footer">
			<form class="cart" method="post" enctype='multipart/form-data'>
			 	<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />
			 	<button type="submit" class="chamfered-button chamfered-button-yellow"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
			</form>
			<h5 class="type-tester-notice">Opentype features listed above may not work in<br /> this demo because of limited browser support.</h5>
		</div>
	 </div>
	<meta itemprop="url" content="<?php the_permalink(); ?>" />
	</div>
	<footer class="entry-footer">
		<?php
				verycool_entry_footer();
				the_post_navigation();

		if ( 'post' === get_post_type() ) : ?>
		<?php
		endif; ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

</div><!-- #product-<?php the_ID(); ?> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
$('#font-family-select').data('oldVal', $('#font-family-select').val());
$('#font-family-select').change(function() {
    var $this = $(this);
    var newClass = $this.val();
    var oldClass = $this.data('oldVal');
    $this.data('oldVal', newClass);
    
    $('div.type-tester span.fontselect').removeClass(oldClass).addClass(newClass);
/*==  $('div.type-tester span.ui-btn-text').text($this.find('option:selected').text()); ==*/
   });

$('#font-weight-select').data('oldVal', $('#font-weight-select').val());
$('#font-weight-select').change(function() {
    var $this = $(this);
    var newClass = $this.val();
    var oldClass = $this.data('oldVal');
    $this.data('oldVal', newClass);
    
    $('div.type-tester span.fontweight').removeClass(oldClass).addClass(newClass);
/*==     $('div.type-tester span.ui-btn-text').text($this.find('option:selected').text());==*/
});
/* slider */
$('#font-size-slider').on('change', function () {
    var v = $(this).val();
    $('div.type-tester span.fontselect').css('font-size', v + 'px')
});
/* ligatures */
$('#font-alts').on('change', function () {
    var x = this.checked ? 'ss01' : ' ';
    $('div.type-tester span.fontselect').css('font-feature-settings', x )
});
/* clear text */
$('#type-tester-editable').on('activate', function() {
    $(this).empty();
    var range, sel;
    if ( (sel = document.selection) && document.body.createTextRange) {
        range = document.body.createTextRange();
        range.moveToElementText(this);
        range.select();
    }
});

$('#type-tester-editable').focus(function() {
    if (this.hasChildNodes() && document.createRange && window.getSelection) {
        $(this).empty();
        var range = document.createRange();
        range.selectNodeContents(this);
        var sel = window.getSelection();
        sel.removeAllRanges();
        sel.addRange(range);
    }
});
</script>
<?php do_action( 'woocommerce_after_single_product' ); ?>
<div class="yellow-section">
	
</div>
<?php wp_enqueue_style( 'webfonts' ); ?>
