<?php
	header('Access-Control-Allow-Origin: *');
	function crear_objeto_js($data,$name){
		$path=$_SERVER['DOCUMENT_ROOT'].'es/js/starperu/'.$name.'.js';
		$arch = fopen($path, "w+");
		fwrite($arch, $data);
		fclose($arch);
	}

	if (isset($_GET['objstar'])) {
		$data='objstar='.$_GET['objstar'];
		crear_objeto_js($data,'starperu');
		echo 'ok';
	}
	if (isset($_POST["datajson"])) {
		$data='datajson='.$_POST['datajson'];
		crear_objeto_js($data,'star_promocion');
		echo 'ok';
	}
	if (isset($_POST['verificar_file'])) {
		$titulo=$_POST['titulo'];
		$file='./'.$titulo.'.html';
		echo file_exists($file)==1 ? 1: 0;
	}
	if (isset($_POST['objpromociones'])) {
		$data='objpromociones='.$_POST['objpromociones'];
		crear_objeto_js($data,'html_promos');
		echo 'ok';
	}
	if (isset($_POST['crear_file'])) {
		$origen='archivo_plantilla.html';
		$nombre_file=$_POST['file'];
		$destino=$nombre_file.'.html';
		echo copy($origen, $destino) == 1 ? 1 : 0;
	}
	if (isset($_POST['eliminar-fichero'])) {
		$nombre_file=$_POST['file'];
		$file='./'.$nombre_file.'.html';
		if (file_exists($file)) {
			echo unlink($file)==1 ? 1 : 0;
		}
		else{
			echo 0;
		}
	}
?>