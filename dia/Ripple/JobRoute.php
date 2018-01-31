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
     * @var    int
     * @access public
     */
    public $JobNumber;

    /**
     * XXX
     *
     * @var    int
     * @access public
     */
    public $Sequence;

    /**
     * XXX
     *
     * @var    char(20)
     * @access public
     */
    public $MachineCode;

    /**
     * XXX
     *
     * @var    int
     * @access public
     */
    public $Minutes;

    /**
     * XXX
     *
     * @var    varchar
     * @access public
     */
    public $Instruction;

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
    public function CRUD()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}

?>
