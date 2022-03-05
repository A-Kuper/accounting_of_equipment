<?php /** @noinspection PhpUndefinedVariableInspection */

ini_set('display_errors', 1); error_reporting(-1);
require "../db/connect.php";


if ($_POST['hidden'] == 'cartridge') {
    $cartridgeNumber = filter_var(trim($_POST['cartridge_number']));

    $cartridgeModel = filter_var(trim($_POST['cartridge_model']));

    $printerNumber = filter_var(trim($_POST['printer_number']));

    $department = filter_var(trim($_POST['department']));

    $telWorker = filter_var(trim($_POST['tel_worker']));

	/** @$mysqli from db/connect */
	mysqli_query($mysqli,"INSERT INTO `cartridge`(`cartridge_number`, 
            `cartridge_model`, `printer_number`, `department`, `tel_worker` )
            VALUES ('$cartridgeNumber', '$cartridgeModel', '$printerNumber', '$department', '$telWorker')");

	mysqli_close($mysqli);

}elseif($_POST['hidden'] == 'pc'){
	$pcNumber = filter_var(trim($_POST['pc_number']));

	$pcModel = filter_var(trim($_POST['pc_model']));

	$pcReleaseDate = filter_var(trim($_POST['pc_release_date']));

	$pcServiceLife = filter_var(trim($_POST['pc_service_life']));

	$pcStructure = filter_var(trim($_POST['pc_structure']));

	$pcLocation = filter_var(trim($_POST['pc_location']));

	$pcResponsible = filter_var(trim($_POST['pc_responsible']));

	$pcNote = filter_var(trim($_POST['pc_note']));

	/** @$mysqli from db/connect */
	mysqli_query($mysqli,"INSERT INTO `pc`(`pc_number`, `pc_model`,
            `pc_release_date`, `pc_service_life`, `pc_structure`, `pc_location`, `pc_responsible`,`pc_note` )
            VALUES ('$pcNumber', '$pcModel', '$pcReleaseDate', '$pcServiceLife', '$pcStructure', 
            '$pcLocation', '$pcLocation', '$pcNote')");

	mysqli_close($mysqli);


}elseif($_POST['hidden'] == 'printer'){
	$printerNumber = filter_var(trim($_POST['printer_number']));
	$printerModel = filter_var(trim($_POST['printer_model']));
	$printerReleaseDate = filter_var(trim($_POST['printer_release_date']));
	$printerServiceLife = filter_var(trim($_POST['printer_service_life']));
	$printerLocation = filter_var(trim($_POST['printer_location']));
	$printerResponsible = filter_var(trim($_POST['printer_responsible']));

	/** @$mysqli from db/connect */
	mysqli_query($mysqli,"INSERT INTO `printer`(`printer_number`, `printer_model`,
            `printer_release_date`, `printer_service_life`, `printer_location`, `printer_responsible`)
            VALUES ('$printerNumber', '$printerModel', '$printerReleaseDate', '$printerServiceLife', 
                    '$printerLocation', '$printerResponsible')");

	mysqli_close($mysqli);


}

















//$result = $mysql->query("SELECT * FROM `technic`");
//
//while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
//{
//    echo '<p>Запись id='.$row['id'].'Номер картриджа: '.$row['cartridge_number'].'</p>';// выводим данные
//
//}




//$mysql->query("INSERT INTO `users`(`login`, `pass`, `name`)
//VALUES('$login', '$pass', '$name')");
//
//$mysql->close();

//header('Location: /');