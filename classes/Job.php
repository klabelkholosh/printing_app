<?php
require_once 'Product.php';
require_once 'SalesOrder.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class Job {
    // Attributes
    /**
     * XXX
     *
     * @var    int $SONumber
     * @access public
     */
    var $SONumber;

    /**
     * XXX
     *
     * @var    date $DateRequired
     * @access public
     */
    var $DateRequired;

    /**
     * XXX
     *
     * @var    char(40) $Product
     * @access public
     */
    var $Product;

    /**
     * XXX
     *
     * @var    dec $Quantity
     * @access public
     */
    var $Quantity;

    /**
     * XXX
     *
     * @var    char(1) $Status
     * @access public
     */
    var $Status = P W C;

    /**
     * XXX
     *
     * @var    int $LinkJobNumber
     * @access public
     */
    var $LinkJobNumber;

    /**
     * XXX
     *
     * @var    char(60) $ArtworkAddress
     * @access public
     */
    var $ArtworkAddress;

    /**
     * XXX
     *
     * @var    dec $MaterialCost
     * @access public
     */
    var $MaterialCost;

    /**
     * XXX
     *
     * @var    int $JobNumber
     * @access protected
     */
    var $_JobNumber;

    // Associations
    /**
     * XXX
     *
     * @var    Product $unnamed
     * @access private
     * @accociation Product to unnamed
     */
    #var $unnamed;

    /**
     * XXX
     *
     * @var    SalesOrder $unnamed
     * @access private
     * @accociation SalesOrder to unnamed
     */
    #var $unnamed;

    // Operations
    /**
     * XXX
     * 
     * @access public
     */
    function CRUD() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    function ConfirmMaterial() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    function ConfirmRoute() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    function CalculateRequirement() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    function JobTicket() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    function CalculateBalance() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
