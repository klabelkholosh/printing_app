<?php
require_once 'Machine.php';
require_once 'Person.php';
require_once 'Job.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class Time {
    // Attributes
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
     * @var    int $JobNumber
     * @access public
     */
    var $JobNumber;

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
     * @var    time $StartTime
     * @access public
     */
    var $StartTime;

    /**
     * XXX
     *
     * @var    time $EndTime
     * @access public
     */
    var $EndTime;

    /**
     * XXX
     *
     * @var    int $QtyProduced
     * @access public
     */
    var $QtyProduced;

    /**
     * XXX
     *
     * @var    char(20) $MachineCode
     * @access 
     */
    var $_MachineCode;

    // Associations
    /**
     * XXX
     *
     * @var    Machine $unnamed
     * @access private
     * @accociation Machine to unnamed
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
    function StartJob() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    function EndJob() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    function TrackJob() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    function TrackMachine() {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
