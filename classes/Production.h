#include "Job.h"

/// class Production - 
class Production {
  // Associations
  Job* unnamed;
  // Attributes
public:
  int Jobnumber;
  char(40) Product;
  int Quantity;
  date DateProduced;
  time TineProduced;
  char(20) PersonCode;
  /// (R)eceipt Re(T)urn (S)crap
  char(1) Type;
  // Operations
public:
  CRUD ();
  BalanceByJob ();
  BalanceByDate ();
};

