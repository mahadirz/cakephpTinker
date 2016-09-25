<?php
/**
 * Shell to start Psysh REPL
 **
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2016, Mahadir Ahmad (http://github.com/mahadirz)
 * @link          https://github.com/mahadirz/CakephpTinker Cakephp Tinker
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppShell', 'Console/Command');
App::uses('ClassRegistry', 'Utility');

require_once APP . 'Plugin' . DS . 'CakephpTinker' . DS . 'Vendor' . DS .  'autoload.php';

class PsyShell extends AppShell {
	
	public function main() {
		eval(\Psy\sh());
	}

}