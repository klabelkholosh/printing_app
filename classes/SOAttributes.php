<?php
require_once 'SOLines.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class SOAttributes {
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
     * @var    char(40) $ProductCode
     * @access public
     */
    var $ProductCode;

    /**
     * XXX
     *
     * @var    char(60) $DefaultName
     * @access public
     */
    var $DefaultName;

    /**
     * XXX
     *
     * @var    dec $DefaultValue
     * @access public
     */
    var $DefaultValue;

    // Associations
    /**
     * XXX
     *
     * @var    SOLines $unnamed
     * @access private
     * @accociation SOLines to unnamed
     */
    #var $unnamed;

    /**
     * XXX
     *
     * @var    SOLines $unnamed
     * @access private
     * @accociation SOLines to unnamed
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
