<?php
/**
 * @package  Framework\Logic\Type
 * @version  0.1.0
 * @author  Tim Oram (mitmaro@mitmaro.ca)
 * @copyright  Copyright 2010 Tim Oram (<a href="http://www.mitmaro.ca">www.mitmaro.ca</a>)
 * @license  <a href="http://www.opensource.org/licenses/mit-license.php">The MIT License</a>
 */

namespace Framework\Logic\Type;

use
	Framework\Logic\ExpressionInterface
;

interface TypeInterface  extends ExpressionInterface {
	/**
	 * Gets the php value
	 */
	public function getValue();
}
