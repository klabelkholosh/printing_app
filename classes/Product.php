<?php
require_once 'ProdGroup.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class Product {
    // Attributes
    /**
     * XXX
     *
     * @var    varchar $Description
     * @access public
     */
    var $Description;

    /**
     * XXX
     *
     * @var    char(20) $ProdGroup
     * @access public
     */
    var $ProdGroup;

    /**
     * XXX
     *
     * @var    char(20) $PriceUnit
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
     * @var    char $CustomerCode
     * @access public
     */
    var $CustomerCode;

    /**
     * XXX
     *
     * @var    char(40) $ProductCode
     * @access protected
     */
    var $_ProductCode;

    // Associations
    /**
     * XXX
     *
     * @var    ProdGroup $unnamed
     * @access private
     * @accociation ProdGroup to unnamed
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
