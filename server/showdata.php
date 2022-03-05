<?php

ini_set('display_errors', 1); error_reporting(-1);
require "../db/connect.php";

/* @$mysqli from db/connect */
if ($mysqli == false){
	print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}

if($_GET['technic'] == 'cartridges'){

	$result = mysqli_query($mysqli, "SELECT * FROM `cartridge`");

	$arr = [];
	while ($obj = mysqli_fetch_object($result)) {

		$arr[$obj->id]['cartridge_number'] = $obj->cartridge_number;
		$arr[$obj->id]['cartridge_model'] = $obj->cartridge_model;
		$arr[$obj->id]['printer_number'] = $obj->printer_number;
		$arr[$obj->id]['department'] = $obj->department;
		$arr[$obj->id]['tel_worker'] = $obj->tel_worker;

	}
	echo json_encode(array_reverse($arr), JSON_UNESCAPED_UNICODE);

}elseif($_GET['technic'] == 'pc'){

	$result = mysqli_query($mysqli, "SELECT * FROM `pc`");

	$arr = [];
	while ($obj = mysqli_fetch_object($result)) {

		$arr[$obj->id]['pc_number'] = $obj->pc_number;
		$arr[$obj->id]['pc_model'] = $obj->pc_model;
		$arr[$obj->id]['pc_release_date'] = $obj->pc_release_date;
		$arr[$obj->id]['pc_service_life'] = $obj->pc_service_life;
		$arr[$obj->id]['pc_structure'] = $obj->pc_structure;
		$arr[$obj->id]['pc_location'] = $obj->pc_location;
		$arr[$obj->id]['pc_responsible'] = $obj->pc_responsible;
		$arr[$obj->id]['pc_note'] = $obj->pc_note;

	}
	echo json_encode(array_reverse($arr), JSON_UNESCAPED_UNICODE);

}elseif($_GET['technic'] == 'printers'){

	$result = mysqli_query($mysqli, "SELECT * FROM `printer`");

	$arr = [];
	while ($obj = mysqli_fetch_object($result)) {

		$arr[$obj->id]['printer_number'] = $obj->printer_number;
		$arr[$obj->id]['printer_model'] = $obj->printer_model;
		$arr[$obj->id]['printer_release_date'] = $obj->printer_release_date;
		$arr[$obj->id]['printer_service_life'] = $obj->printer_service_life;
		$arr[$obj->id]['printer_location'] = $obj->printer_location;
		$arr[$obj->id]['printer_responsible'] = $obj->printer_responsible;

	}
	echo json_encode(array_reverse($arr), JSON_UNESCAPED_UNICODE);

}else echo 'Что-то';



mysqli_close($mysqli);


