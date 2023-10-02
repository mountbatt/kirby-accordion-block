<?php 
	$items = $block->accordion()->toStructure();
	$accordion_id = uniqid(); 
?>
<?php if($items): ?>
	
<div class="accordion" id="<?= "accordion-".$accordion_id; ?>">
	<?php foreach ($items as $item): ?>
	<?php $item_uid = uniqid(); ?>
	<div class="accordion-item">
		<h2 class="accordion-header">
			<button class="accordion-button<?php e($item->toggle()->bool(), '',' collapsed') ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $item_uid ?>" aria-expanded="<?php e($item->toggle()->bool(), 'true', 'false') ?>" aria-controls="collapse-<?= $item_uid ?>">
				<?= $item->summary() ?>
			</button>
		</h2>
		<div id="collapse-<?= $item_uid ?>" class="accordion-collapse collapse <?php e($item->toggle()->bool(), 'show') ?>" data-bs-parent="#<?= "accordion-".$accordion_id; ?>">
			<div class="accordion-body">
				<?= $item->details()->text() ?>
			</div>
		</div>
	</div>
	<?php endforeach ?>
</div>

<?php endif; ?>

<?php 
	$schema = array(
	'@context'   => "https://schema.org",
	'@type'      => "FAQPage",
	'mainEntity' => array()
	);
	if ( $items && $block->schema()->bool() ) :
	foreach ($items as $item): 
		$questions = array(
			'@type'          => 'Question',
			'name'           => strip_tags($item->summary()->text()),
			'acceptedAnswer' => array(
			'@type' => "Answer",
			'text' => strip_tags($item->details()->text())
				)
				);
				array_push($schema['mainEntity'], $questions);
	endforeach;
	echo '<!-- faq schema --><script type="application/ld+json">'. json_encode($schema) .'</script>';
	endif;
?>

<?php /* summary output
<?php $items = $block->accordion()->toStructure();
foreach ($items as $item): ?>
	<details <?php e($item->toggle()->bool(), 'open') ?>>
		<?php if ($item->summary()->isNotEmpty()): ?>
		<summary><?= $item->summary() ?></summary>
		<?php endif ?>
		<?= $item->details()->text() ?>
	</details>
<?php endforeach ?>
*/ ?>