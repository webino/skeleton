<?php
/**
 * Webino
 *
 * PHP version 5.3
 *
 * LICENSE: This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt. It is also available through the
 * world-wide-web at this URL: http://www.webino.org/license/
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world-wide-web, please send an email to license@webino.org
 * so we can send you a copy immediately.
 *
 * @category   Webino
 * @package    Skeleton
 * @subpackage public
 * @author     Peter Bačinský <peter@bacinsky.sk>
 * @copyright  2012 Peter Bačinský (http://www.bacinsky.sk/)
 * @license    http://www.webino.org/license/ New BSD License
 * @version    GIT: $Id$
 * @version    Release: @@PACKAGE_VERSION@@
 * @link       http://pear.webino.org/skeleton/
 */

/**
 * Initialization of Webino
 */
require 'Webino/init.php';

/**
 * Webino public index
 */
require 'Webino/public/index.php';

/**
 * Run the application
 */
$application->run();
