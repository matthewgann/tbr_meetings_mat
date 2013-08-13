<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php
$mango = '';
$forge = $forge + 1;
?>

<?php foreach ($rows as $id => $row): ?>
  <?php $mango .= '<button type="button" class="btn"><i class="icon-file">'; ?>
    <?php $mango .= $row; ?>
  <?php $mango .= '</i></button>'; ?>
<?php endforeach; ?>

<?php $newtitle = str_replace(' ', '-', $title); ?>

<div class="accordion-group">
  <div class="accordion-heading">
  	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse-<?php print $newtitle; ?>"><i class="icon-th-list"> <?php print $title; ?></i></a>
  </div>

  <div id="collapse-<?php print $newtitle; ?>" class="accordion-body collapse">
    <div class="accordion-inner"> 
    	<div class="btn-group btn-group-vertical">
    	<?php print $mango; ?>
    	</div>
    </div>
  </div>
</div>