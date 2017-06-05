<?php
require_once 'Job.php';
require_once 'Person.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class Delivery {
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
     * @var    char(20) $Person
     * @access public
     */
    var $Person;

    /**
     * XXX
     *
     * @var    char(1) $Status
     * @access public
     */
    var $Status = D;

    // Associations
    /**
     * XXX
     *
     * @var    Job $unnamed
     * @access private
     * @accociation Job to unnamed
     */
    #var $unnamed;

    /**
     * XXX
     *
     * @var    Person $unnamed
     * @access private
     * @accociation Person to unnamed
     */
    #var $unnamed;

    // Operations
    /**
     * XXX
     * 
     * @access public
     */
    function Deliver() {
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
