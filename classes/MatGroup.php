<?php

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class MatGroup {
    // Attributes
    /**
     * XXX
     *
     * @var    char(40) $Description
     * @access public
     */
    var $Description;

    /**
     * XXX
     *
     * @var    char(1) $Type
     * @access public
     */
    var $Type = F R;

    /**
     * XXX
     *
     * @var    int $MRQty
     * @access public
     */
    var $MRQty;

    /**
     * XXX
     *
     * @var    dec $MarkupPercentage
     * @access public
     */
    var $MarkupPercentage;

    /**
     * XXX
     *
     * @var    char $StockUnit
     * @access public
     */
    var $StockUnit = 10;

    /**
     * XXX
     *
     * @var    char $PriceUnit
     * @access public
     */
    var $PriceUnit = 10;

    /**
     * XXX
     *
     * @var    dec $StockConv
     * @access public
     */
    var $StockConv;

    /**
     * XXX
     *
     * @var    char(10) $GroupCode
     * @access protected
     */
    var $_GroupCode;

    // Associations
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
