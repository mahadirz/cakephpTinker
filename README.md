Cakephp Tinker
==============
Tinkering Application from REPL. Bringing Psysh to cakePHP 2.x 

## Install

* cd app/Plugin
* Git clone https://github.com/mahadirz/cakephpTinker.git
* cd cakephpTinker
* composer install
* Add CakePlugin::load('CakephpTinker'); into bootstrap.php

## Usage
`php app/Console/cake.php CakephpTinker.Psy`
`>> $user = ClassRegistry::init('User');`
`>> $user->find('first',array('conditions'=>array('User.id'=>1)));`
## License

Licensed under <a href="http://www.opensource.org/licenses/mit-license.php">The MIT License</a>
Redistributions of files must retain the above copyright notice.

## Author

Mahadir Ahmad - http://madet.my
