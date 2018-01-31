<?php
require_once 'PurchaseOrder.php';
require_once 'Person.php';
require_once 'Material.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class Receipt {
    // Attributes
    /**
     * XXX
     *
     * @var    int $ReceiptNumber
     * @access public
     */
    var $ReceiptNumber;

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
     * @var    date $Date
     * @access public
     */
    var $Date;

    /**
     * XXX
     *
     * @var    time $Time
     * @access public
     */
    var $Time;

    /**
     * XXX
     *
     * @var    char(20) $Person
     * @access public
     */
    var $Person;

    /**
     * XXX
     *
     * @var    char(1) $Type
     * @access public
     */
    var $Type = R S;

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
     * @var    Person $unnamed
     * @access private
     * @accociation Person to unnamed
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
    function ReceiveGoods() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    function ReturnGoods() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    function PrintQRLabel() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
