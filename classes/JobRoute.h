#include "Job.h"
#include "Machine.h"

/// class JobRoute - 
class JobRoute {
  // Associations
  Job* unnamed;
  Machine* unnamed;
  // Attributes
public:
  int JobNumber;
  int Sequence;
  char(20) MachineCode;
  int Minutes;
  varchar Instruction;
  // Operations
public:
  CRUD ();
};

