#include "Person.h"
#include "Material.h"
#include "Job.h"

/// class Issue - 
class Issue {
  // Associations
  Person* unnamed;
  Material* unnamed;
  Job* unnamed;
  // Attributes
public:
  int JobNumber;
  char(40) MaterialCode;
  dec Quantity;
  date Date;
  time Time;
  char(20) PersonCode;
  /// (I)ssue (R)eturn (S)crap Adjust(U)p Adjust(D)own
  char(1) Type;
  int IssueNumber;
  // Operations
public:
  Issue ();
  Return ();
};

