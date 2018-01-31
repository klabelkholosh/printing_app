<?php
require_once 'Supplier.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class PurchaseOrder {
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
     * @var    date $DateRequired
     * @access public
     */
    var $DateRequired;

    /**
     * XXX
     *
     * @var    int $PONumber
     * @access protected
     */
    var $_PONumber;

    // Associations
    /**
     * XXX
     *
     * @var    Supplier $unnamed
     * @access private
     * @accociation Supplier to unnamed
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
