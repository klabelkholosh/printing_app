#include "Supplier.h"
#include "Address.h"

/// class SupplierAddress - 
class SupplierAddress {
  // Associations
  Supplier* unnamed;
  Address* unnamed;
  // Attributes
public:
  char(10) SupplierCode;
  int AddressNumber;
  // Operations
public:
  CRUD ();
};

