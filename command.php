<?php

if ( ! class_exists( 'EE' ) ) {
	return;
}

/**
 * Says "Hello World" to new users
 */
$hello_world_command = function() {
	EE::success( "Hello world." );
};
EE::add_command( 'hello-world', $hello_world_command );

