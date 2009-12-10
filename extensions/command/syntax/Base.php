<?php
/**
 * Lithium Hooks: A collection of git hooks & scripts that can be used for development in the
 * Lithium core and with Lithium applications.
 *
 * @copyright     Copyright 2009, Union of Rad, Inc. (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace app\extensions\command\syntax;

/**
 * This is the base class all verification command need to extend.
 */
abstract class Base extends \lithium\console\Command {

	/**
	 * Checks if given file can be checked.
	 *
	 * @param string $file Absolute path to file.
	 * @return boolean
	 */
	abstract public function accepts($file);

	/**
	 * Process a file by checking it's contents.
	 *
	 * @param string $file Absolute path to file.
	 * @return array|boolean|void `false` if file cannot be processed or - if applicable -
	 *                             an array of violation messages.
	 */
	abstract public function process($file);
}

?>