<?php
require_once 'PurchaseOrder.php';
require_once 'Material.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class POLines {
    // Attributes
    /**
     * XXX
     *
     * @var    int $PONumber
     * @access public
     */
    var $PONumber;

    /**
     * XXX
     *
     * @var    char(40) $MaterialCode
     * @access public
     */
    var $MaterialCode;

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
     * @var    char(10) $PriceUnit
     * @access public
     */
    var $PriceUnit;

    /**
     * XXX
     *
     * @var    dec $Price
     * @access public
     */
    var $Price;

    /**
     * XXX
     *
     * @var    dec $StkUnitConv
     * @access public
     */
    var $StkUnitConv;

    /**
     * XXX
     *
     * @var    char(1) $Status
     * @access public
     */
    var $Status = O;

    /**
     * XXX
     *
     * @var    char $Person
     * @access public
     */
    var $Person;

    // Associations
    /**
     * XXX
     *
     * @var    PurchaseOrder $unnamed
     * @access private
     * @accociation PurchaseOrder to unnamed
     */
    #var $unnamed;

    /**
     * XXX
     *
     * @var    Material $unnamed
     * @access private
     * @accociation Material to unnamed
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
    function CompleteLine() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
