<?php
if(!function_exists('ckeditor'))
{
	function ckeditor($name='edit_content', $value='', $config=array(), $events=array())
	{
		if(empty($config))
			$config = Config::get('ckeditor');
		if(empty($config))
			$config = array();
		
		$ckeditor = new CKEditor(Config::get('ckeditor.basepath'));
		
		return $ckeditor->editor($name, $value, $config, $events);
	}
}