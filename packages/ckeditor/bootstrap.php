<?php
Autoloader::add_core_namespace('CKEditor');

Autoloader::add_classes(array(
	'CKEditor\\CKEditor'           => __DIR__.DS.'classes'.DS.'ckeditor.php',
));

Config::load(__DIR__.DS.'config'.DS.'config.php', 'ckeditor', false, true);

require __DIR__.DS.'core.php';