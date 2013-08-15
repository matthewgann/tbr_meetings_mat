<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<?php $newtitle = str_replace(' ', '-', $title); ?>

<div class="accordion-group">
  <div class="accordion-heading">
  	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse-<?php print $newtitle; ?>"><i class="icon-th-list"> <?php print $title; ?></i></a>
  </div>

  <div id="collapse-<?php print $newtitle; ?>" class="accordion-body collapse">
    <div class="accordion-inner"> 
    	<div class="btn-group btn-group-vertical">
    	<?php foreach ($rows as $id => $row): ?>
		<?php print '<button type="button" class="btn"><i class="icon-file">'; ?>
		<?php print $row; ?>
		<?php print '</i></button>'; ?>
		<?php endforeach; ?>

    	</div>
    </div>
  </div>
</div>