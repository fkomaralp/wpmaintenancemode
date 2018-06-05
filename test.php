<?php

if(!defined('WP_CLI')) { return; }


class test extends WP_CLI_Command {

	public function hello( $args = Array(), $assoc_args = Array() ) {
		WP_CLI::success("devam et");
	}

}

WP_CLI::add_command('test', 'test');

?>
