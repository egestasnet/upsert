<?php

$table  = 'students';

$fields = [
	'id',
	'name',
	'class',
	'social',
	'science',
	'math'
	];

// https://www.plus2net.com/sql_tutorial/sql_max.php
// https://www.plus2net.com/sql_tutorial/sql_update-on-duplicate-key.php

$insert = [
	[2,  'Max Ruinn',   'Three', 86, 57, 86],
	[3,  'Arnold',      'Three', 56, 41, 76],
	[4,  'Krish Star',  'Four',  62, 52, 72],
	[5,  'John Mike',   'Four',  62, 82, 92],
	[6,  'Alex John',   'Four',  58, 93, 83],
	[7,  'My John Rob', 'Fifth', 79, 64, 74],
	[8,  'Asruid',      'Five',  89, 84, 94],
	[9,  'Tes Qry',     'Six',   77, 61, 71],
	[10, 'Big John',    'Four',  56, 44, 56],
	[11, 'New Name',    'Five',  75, 78, 52] 
	];

$update = [
	'class',
	'social',
	'science',
	'math'
	];