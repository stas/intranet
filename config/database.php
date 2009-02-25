<?php
class DATABASE_CONFIG {

        var $default = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'intranet',
		'encoding' => 'utf8'
        );
        
        var $ldap  = array (
		'datasource' => 'ldap',
		'host' => 'yourhost',                
		'port' => 389,                        
		'basedn' => '',    
		'login' => '', 
		'password' => '',                
		'version' => 3                    
        );
}
?>
