#include "Product.h"
#include "Machine.h"

/// class DefaultRoute - 
class DefaultRoute {
  // Associations
  Product* unnamed;
  Machine* unnamed;
  // Attributes
public:
  char(40) ProductCode;
  char(60) DefaultName;
  dec DefaultValue;
  char(20) DefaultMachine;
  int DefaultSequence;
  int DefaultMinutes;
  // Operations
public:
  CRUD ();
};

