<?php
require_once 'MatGroup.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class Material {
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
     * @var    char(10) $MatGroup
     * @access public
     */
    var $MatGroup;

    /**
     * XXX
     *
     * @var    char(1) $Type
     * @access public
     */
    var $Type = S R C U;

    /**
     * XXX
     *
     * @var    dec $MinimumStock
     * @access public
     */
    var $MinimumStock;

    /**
     * XXX
     *
     * @var    char(1) $Status
     * @access public
     */
    var $Status = N C L D;

    /**
     * XXX
     *
     * @var    dec $AveragePrice
     * @access public
     */
    var $AveragePrice;

    /**
     * XXX
     *
     * @var    char(40) $MaterialCode
     * @access protected
     */
    var $_MaterialCode;

    // Associations
    /**
     * XXX
     *
     * @var    MatGroup $unnamed
     * @access private
     * @accociation MatGroup to unnamed
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
    function CalculateStockOnHand() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    function StockCard() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    function LowStockWarning() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
