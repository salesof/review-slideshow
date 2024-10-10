<?php

/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>

<div <?php echo get_block_wrapper_attributes(); ?>>

	<div class="review">
		<div class="review-wrapper">
			<div class="flex-wrapper">
				<div class="flex-block icon-left">
					<i class="fa fa-quote-left"></i>
				</div>

				<div class="splide" data-interval="<?php echo $attributes["interval"] ?>">
					<div class="splide__track">
						<ul class="splide__list">
							<?php echo $content; ?>
						</ul>
					</div>
				</div>

				<div class="flex-block icon-right">
					<i class="fa fa-quote-right"></i>
				</div>
			</div>
		</div>
	</div>

</div>