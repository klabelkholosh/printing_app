<?php
require_once 'Job.php';
require_once 'Machine.php';

/**
 * XXX detailed description
 *
 * @author    XXX
 * @version   XXX
 * @copyright XXX
 */
class JobRoute {
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
     * @var    int $Sequence
     * @access public
     */
    var $Sequence;

    /**
     * XXX
     *
     * @var    char(20) $MachineCode
     * @access public
     */
    var $MachineCode;

    /**
     * XXX
     *
     * @var    int $Minutes
     * @access public
     */
    var $Minutes;

    /**
     * XXX
     *
     * @var    varchar $Instruction
     * @access public
     */
    var $Instruction;

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
