<?php
require_once 'Person.php';
require_once 'Material.php';
require_once 'Job.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class Issue {
    // Attributes
    /**
     * XXX
     *
     * @var    int $JobNumber
     * @access public
     */
    var $JobNumber;

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
     * @var    char(20) $PersonCode
     * @access public
     */
    var $PersonCode;

    /**
     * XXX
     *
     * @var    char(1) $Type
     * @access public
     */
    var $Type = I R S U D;

    // Associations
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

    /**
     * XXX
     *
     * @var    Job $unnamed
     * @access private
     * @accociation Job to unnamed
     */
    #var $unnamed;

    // Operations
    /**
     * XXX
     * 
     * @access public
     */
    function Issue() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    function Return() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
