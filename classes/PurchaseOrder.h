#include "Supplier.h"

/// class PurchaseOrder - 
class PurchaseOrder {
  // Associations
  Supplier* unnamed;
  // Attributes
public:
  char(10) SupplierCode;
  date DateRequired;
protected:
  int PONumber;
  // Operations
public:
  CRUD ();
};

