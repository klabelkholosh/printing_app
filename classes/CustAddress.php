<?php
require_once 'Customer.php';
require_once 'Address.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class CustAddress {
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
     * @var    int $AddressNumber
     * @access public
     */
    var $AddressNumber;

    // Associations
    /**
     * XXX
     *
     * @var    Customer $unnamed
     * @access private
     * @accociation Customer to unnamed
     */
    #var $unnamed;

    /**
     * XXX
     *
     * @var    Address $unnamed
     * @access private
     * @accociation Address to unnamed
     */
    #var $unnamed;

    // Operations
    /**
     * XXX
     * 
     * @access public
     */
    function Add() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    function Remove() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
