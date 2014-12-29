<?php
header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename=horses-' . date('YmdHis') . '.xls');
header('Pragma: no-cache');
?>
<?php foreach ($horses[0]['Horse'] as $key => $value): ?>"<?php echo $key; ?>",<?php endforeach; ?>
<?php echo "\n"; ?>
<?php foreach ($horses as $horse): ?>
<?php foreach ($horse['Horse'] as $key => $value): ?>"<?php echo h($value); ?>",<?php endforeach; ?>
<?php echo $horse['Horse']['id']; ?>
<?php echo $horse['Horse']['name']; ?>
<?php echo $horse['Horse']['number']; ?>
<?php echo $horse['Horse']['birthdate']; ?>
<?php echo $horse['Horse']['Gender']['name']; ?>
<?php echo $horse['Horse']['Gender']['name']; ?>


<?php echo "\n"; ?>
<?php endforeach; ?>