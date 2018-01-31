#include "Job.h"

/// class JobAttributes - 
class JobAttributes {
  // Associations
  Job* unnamed;
  // Attributes
public:
  int JobNumber;
  char(40) ProductCode;
  char(60) AttrName;
  dec AttrValue;
  // Operations
public:
  CRUD ();
};

