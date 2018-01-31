<?php
require_once 'Product.php';
require_once 'Machine.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class DefaultRoute {
    // Attributes
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

    /**
     * XXX
     *
     * @var    char(20) $DefaultMachine
     * @access public
     */
    var $DefaultMachine;

    /**
     * XXX
     *
     * @var    int $DefaultSequence
     * @access public
     */
    var $DefaultSequence;

    /**
     * XXX
     *
     * @var    int $DefaultMinutes
     * @access public
     */
    var $DefaultMinutes;

    // Associations
    /**
     * XXX
     *
     * @var    Product $unnamed
     * @access private
     * @accociation Product to unnamed
     */
    #var $unnamed;

    /**
     * XXX
     *
     * @var    Machine $unnamed
     * @access private
     * @accociation Machine to unnamed
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
