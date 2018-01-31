#include "Job.h"
#include "Material.h"

/// class JobMaterial - 
class JobMaterial {
  // Associations
  Job* unnamed;
  Material* unnamed;
  // Attributes
public:
  int JobNumber;
  char(40) MaterialCode;
  varchar Description;
  dec Quantity;
  varchar Instruction;
  // Operations
public:
  CRUD ();
};

