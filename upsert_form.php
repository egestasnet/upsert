<h3>Upsert</h3>

<?php

require_once( 'config.php'       );
require_once( 'class.db.php'     );
require_once( 'upsert_class.php' );

$database = new InsertUpdate();
include ( 'upsert_students.php' );
$added  = $database->upsert ( $table , $fields,  $insert, $update );
if ( $added )
{
	echo '<p>Records added.</p>';
} else {
	echo '<p>Records not added.</p>';
}

if ( $added )
{
	$query = "SELECT * FROM students;";
	$result = $database->get_results( $query, TRUE );
	if ( !empty( $result ) )
	{
		$database->display( $result, TRUE );
		$fields = array_keys( (array)$result[0] );
	?>

	<table border=1>
	<thead>
		<tr>
		<?php
		foreach(  $fields as $field )
		{
		?>

		<th><?php echo ucfirst( $field ); ?></th>

		<?php
		}
		?>

		</tr>
	</thead>

	<tfoot>
		<tr>
			<td colspan="<?php echo count( $fields); ?>" style="text-align: center">&copy;</td>
		</tr>
	</tfoot>

	<tbody>

	<?php
		foreach( $result as $row )
		{
		//$products = explode( ';', $row->product );
		//$database->display( $products, TRUE ); // doet print_r()
		//echo PHP_EOL . PHP_EOL;
		?>

		<tr>
			<td><?php echo $row->id; ?></td>
			<td><?php echo $row->name; ?></td>
			<td><?php echo $row->class; ?></td>
			<td><?php echo $row->social; ?></td>
			<td><?php echo $row->science; ?></td>
			<td><?php echo $row->math; ?></td>
		</tr>

		<?php
		} // end foraech result
	}
} else {
?>
		<tr>
			<td style=""><p>Nothing found</p></td>
		</tr>
<?php
}
?>

	</tbody>
</table>
