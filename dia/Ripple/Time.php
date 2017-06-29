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
     * @var    char(20)
     * @access public
     */
    public $PersonCode;

    /**
     * XXX
     *
     * @var    int
     * @access public
     */
    public $JobNumber;

    /**
     * XXX
     *
     * @var    date
     * @access public
     */
    public $Date;

    /**
     * XXX
     *
     * @var    time
     * @access public
     */
    public $StartTime;

    /**
     * XXX
     *
     * @var    time
     * @access public
     */
    public $EndTime;

    /**
     * XXX
     *
     * @var    int
     * @access public
     */
    public $QtyProduced;

    /**
     * XXX
     *
     * @var    char(20)
     * @access public
     */
    public $MachineCode;

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
    public function StartJob()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    public function EndJob()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    public function TrackJob()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    /**
     * XXX
     * 
     * @access public
     */
    public function TrackMachine()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
