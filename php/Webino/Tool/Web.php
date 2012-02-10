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
 * @subpackage Tool
 * @author     Peter Bačinský <peter@bacinsky.sk>
 * @copyright  2012 Peter Bačinský (http://www.bacinsky.sk/)
 * @license    http://www.webino.org/license/ New BSD License
 * @version    GIT: $Id$
 * @link       http://pear.webino.org/skeleton/
 */

use Zend_Tool_Project_Provider_Exception as ToolException;

/**
 * Webino web provider for Zend Framework CLI tool
 *
 * @category   Webino
 * @package    Skeleton
 * @subpackage Tool
 * @author     Peter Bačinský <peter@bacinsky.sk>
 * @copyright  2012 Peter Bačinský (http://www.bacinsky.sk/)
 * @license    http://www.webino.org/license/ New BSD License
 * @version    Release: @@PACKAGE_VERSION@@
 * @link       http://pear.webino.org/skeleton/
 */
class Webino_Tool_Web
    extends    Zend_Tool_Project_Provider_Abstract
    implements Zend_Tool_Framework_Provider_Pretendable
{
    /**
     * Returns name of provider
     *
     * @return string
     */
    public function getName()
    {
        return 'web';
    }
    
    /**
     * Make website
     *
     * @param string $path
     *
     * @throws ToolException
     */
    public function make($path=null)
    {
        if (realpath($path)) {
            throw new ToolException(
                'webino make web expects path to new directory'
            );
        }
        
        $path = trim($path);
        $path = str_replace('\\', '/', $path);

        $response = $this->_registry->getResponse();

        $response->appendContent(
            'Webino making web at "' . $path . '":', array(
                'color' => 'yellow'
            )
        );

        $src = realpath(__DIR__.'/../skeleton');
        
        $response->appendContent(
            shell_exec(
                "cp $src $path -Rv"
            )
        );

        $response->appendContent(
            'Webino website "' . basename($path) . '" created.', array(
                'color' => 'green'
            )
        );
    }
}
