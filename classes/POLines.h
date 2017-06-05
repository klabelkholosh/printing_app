#include "PurchaseOrder.h"
#include "Material.h"

/// class POLines - 
class POLines {
  // Associations
  PurchaseOrder* unnamed;
  Material* unnamed;
  // Attributes
public:
  int PONumber;
  char(40) MaterialCode;
  dec Quantity;
  char(10) PriceUnit;
  dec Price;
  dec StkUnitConv;
  /// (O)rdered, (R)eceived, (C)omplete (D)eleted
  char(1) Status;
  char Person;
  // Operations
public:
  CRUD ();
  CompleteLine ();
};

