#include "Product.h"
#include "SalesOrder.h"

/// class SOLines - 
class SOLines {
  // Associations
  Product* unnamed;
  SalesOrder* unnamed;
  // Attributes
public:
  int SONumber;
  int JobNumber;
  char(40) Product;
  decimal QuantityOrdered;
  decimal PriceUnit;
  decimal Price;
  /// (L)oaded (Q)uoted (O)rdered (C)ompleted
  char Status;
};

