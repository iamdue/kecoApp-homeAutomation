<?php

/**
 * __autoload function
 * @desc autoloader function
 */
function __autoload($name) {
	echo $name;
	list($namespace, $className) = explode('\\', strtolower($name));
	if($namespace && $className){
//		echo "Want to load $namespace.$classDir.$className\n";
//		echo ROOT.'/'.$namespace.'/'.$className.'/'.$className.'.php'."\n";
		if(file_exists(ROOT.'/'.$namespace.'/'.$className.'/'.$className.'.php')){
			require(ROOT.'/'.$namespace.'/'.$className.'/'.$className.'.php');
		}
	}
//	require end($parts) . '.php';

//	throw new Exception("Unable to load $name.");
}

?>