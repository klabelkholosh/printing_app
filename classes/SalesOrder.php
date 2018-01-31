<?php
require_once 'Customer.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class SalesOrder {
    // Attributes
    /**
     * XXX
     *
     * @var    char(10) $CustomerCode
     * @access public
     */
    var $CustomerCode;

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
     * @var    date $RequiredDate
     * @access public
     */
    var $RequiredDate;

    /**
     * XXX
     *
     * @var    Char(1) $Status
     * @access public
     */
    var $Status = Q I;

    /**
     * XXX
     *
     * @var    int $SONumber
     * @access protected
     */
    var $_SONumber;

    // Associations
    /**
     * XXX
     *
     * @var    Customer $unnamed
     * @access private
     * @accociation Customer to unnamed
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
    function SendQuote() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    function Confirm() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
