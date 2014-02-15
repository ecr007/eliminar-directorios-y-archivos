<?php
	function eliminarDir($carpeta){
		foreach(glob($carpeta . "/*") as $archivos_carpeta){
			echo $archivos_carpeta;
			 
			if (is_dir($archivos_carpeta)){
				eliminarDir($archivos_carpeta);
			}else{
				unlink($archivos_carpeta);
			}
		}
		 
		rmdir($carpeta);
	}

	eliminarDir("_temp");//Colocamos el nombre de la carpeta o archivo
?>
