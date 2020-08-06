<?php
	/*
	* INSERT with test on UNIQUE KEY DUPLICATE
	* If KEY is UNIQUE and already exists, the existing record
	* is updated only when one of the fields differs from new value.
	* Otherwise the record is not updated.
	* If KEY of new value is UNIQUE, a new record is inserted.
	* 
	* $table  (string ) = name of database table
	* $fields ( array ) = [0 => value, 1 => value]
	* $insert ( array ) = [0 => value, 1 => value]
	* $update ( array ) = [0 => veldnaam, 1 => veldnaam]
	* return TRUE or FALSE;
	* Can be the same as $update. Or just the fields that needs to be update.
	* $result = $database->upsert( $table, $fields, $insert, $update );
	*/

/* Example 
INSERT INTO
	students
		(id, name, class, social, science, math)
	VALUES
		(2,  'Max Ruin',    'Three', 86, 57, 86),
		(3,  'Arnold',      'Three', 56, 41, 76),
		(4,  'Krish Star',  'Four',  62, 52, 72),
		(5,  'John Mike',   'Four',  62, 82, 92),
		(6,  'Alex John',   'Four',  58, 93, 83),
		(7,  'My John Rob', 'Fifth', 79, 64, 74),
		(8,  'Asruid',      'Five',  89, 84, 94),
		(9,  'Tes Qry',     'Six',   77, 61, 71),
		(10, 'Big John',    'Four',  56, 44, 56),
		(11, 'New Name',    'Five',  75, 78, 52) 
ON DUPLICATE KEY UPDATE
	social  = values( social  ),
	science = values( science ),
	math    = values( math    );
";
*/
class InsertUpdate extends DB {

	function upsert ( $table, $fields = array(), $inserts = array(), $updates = array() )
	{
		if( !empty( $inserts ) )
		{
			$theFields = implode(', ', $fields);

			foreach( $inserts as $value )
			{
				$grades = [];
				foreach ( $value as $grade )
				{
					$grades[] = "'" . $grade . "'";
				}
				$insert[] = '('. implode(', ', $grades) .')';
			}

			$theInserts = implode(', ', $insert);

			foreach ( $updates as $update) {
				$theUpdate[] = $update . ' = ' . 'values( ' . $update . ' )';
			}
			$theUpdates = implode( ', ', $theUpdate );

			$sql = "INSERT INTO "
			. $table
				. " ( " . $theFields . " )
				VALUES "
				. $theInserts
			. " ON DUPLICATE KEY UPDATE "
				. $theUpdates
			. ";";

			$result = $this->link->query($sql);
			if( $result )
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
		else
		{
			return FALSE;
		}
	}
}

