<?php
require_once 'Supplier.php';
require_once 'Address.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class SupplierAddress {
    // Attributes
    /**
     * XXX
     *
     * @var    char(10) $SupplierCode
     * @access public
     */
    var $SupplierCode;

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
     * @var    Supplier $unnamed
     * @access private
     * @accociation Supplier to unnamed
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
    function CRUD() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
