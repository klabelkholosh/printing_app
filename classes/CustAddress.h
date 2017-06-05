#include "Customer.h"
#include "Address.h"

/// class CustAddress - 
class CustAddress {
  // Associations
  Customer* unnamed;
  Address* unnamed;
  // Attributes
public:
  char(10) CustomerCode;
  int AddressNumber;
  // Operations
public:
  Add ();
  Remove ();
};

