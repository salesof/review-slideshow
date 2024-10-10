<?php

/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$body = $attributes["body"];
$author = $attributes["author"];
$title = $attributes["title"];
?>

<li class="splide__slide">
	<p id="review-body"><?php echo $body ?></p>
	<p id="review-author"><?php echo $author ?></p>

	<?php

	if ($title) { ?>

		<p id="review-title"><?php echo $title ?></p>

	<?php

	} else {
		// do nothing;
	}

	?>
</li>