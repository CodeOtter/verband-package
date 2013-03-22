<?php 

namespace Verband\Core;

use Framework\Package;
use Framework\Context;
use Framework\Process;

/**
 * The Core package.  Currently only established the root framework.init Context.
 */
class Startup extends Package {
	
	/**
	 * Package initialization currently does nothing.
	 * @return	void 
	 */
	public function init($contexts) {}
	
	/**
	* Set custom namespaces
	* @see Framework.Package::getNamespaces()
	* @return array
	*/
	public function getNamespaces($contexts) {
		return array(
			'Symfony\Component'					=> realpath(__DIR__ . '/../../Doctrine/Core/lib/vendor'),
			'Symfony\Component\HttpFoundation'	=> realpath(__DIR__ . '/../../../Framework/Http')
		);
	}
}