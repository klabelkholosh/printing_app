#include "Machine.h"
#include "Person.h"
#include "Job.h"

/// class Time - 
class Time {
  // Associations
  Machine* unnamed;
  Person* unnamed;
  Job* unnamed;
  // Attributes
public:
  char(20) PersonCode;
  int JobNumber;
  date Date;
  time StartTime;
  time EndTime;
  int QtyProduced;
  char(20) MachineCode;
  // Operations
public:
  StartJob ();
  EndJob ();
  TrackJob ();
  TrackMachine ();
};

