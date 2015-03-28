<?php
require_once('cmsBase.php');
//memastikan modul di load sekali
class cmsApplication extends cmsBase {
	//Semua kode yang ada disini dapat diakses melalui fungsi utama dalam CMS
	//disini kita dapat membuat fungsi yg dapat
	//dipanggil oleh USER secara langsung

	function run ()
	{
		//disini akan dibuat kode
		//untuk mengatur seluruh proses dalam cmsAppliaction
		//fungsi ini akan dipanggil dari TemplateFunction
		if (isset($_REQUEST['task']))
		{
			$task=$_REQUEST['task'];
			switch($task)
			{
				case 'addcontent':$this->addcontent ();break;
				case 'anyothertask':$this->anyothertask ();break;
				default : $this->display();break;
			}
		}else 
		{
			$this->display();
		}
	}
	function addcontent ()
	{
		echo 'Disini akan dibuat fungsi menambah konten';
	}

	function display ()
	{
		echo 'Disini akan dibuat fungsi untuk menampilkan konten';
	}

	function anyothertask ()
	{
		echo 'Disini akan ditulis fungsi yang lainnya';
	}
}
?>
