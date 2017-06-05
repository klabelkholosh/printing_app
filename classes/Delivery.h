#include "Job.h"
#include "Person.h"

/// class Delivery - 
class Delivery {
  // Associations
  Job* unnamed;
  Person* unnamed;
  // Attributes
public:
  int JobNumber;
  dec Quantity;
  date Date;
  time Time;
  char(20) Person;
  /// (D)elivered (R)eturnedOK (Q)uarantined (S)crap (I)nvoiced
  char(1) Status;
  // Operations
public:
  Deliver ();
  Return ();
};

