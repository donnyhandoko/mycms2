<?php
require_once('cmsBase.php');
//memastikan modul di load sekali
class cmsApplication extends cmsBase {
	//Semua kode yang ada disini dapat diakses melalui fungsi utama dalam CMS
	//disini kita dapat membuat fungsi yg dapat
	//dipanggil oleh USER secara langsung

	function run()
	{
	$method=(isset($_REQUEST['task']))?$_REQUEST['task']:'display';
	$this->$method();
	}
	function display()
	{
	echo 'ini adalah tempat displaynya';
	}
	
	}
?>

