<?php
/**
 * Render Sale Action Page.
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_SaleAction
 * @copyright   Copyright (c) 2015 <yan.malinovsky@gmail.com>
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * YanMalinovsky_SaleAction_IndexController
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_SaleAction
 * @author      Yan Malinovsky (yan.malinovsky@gmail.com)
 */
class YanMalinovsky_SaleAction_IndexController extends Mage_Core_Controller_Front_Action
{

    /**
     *  Index Action in Controller
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}