#include "PurchaseOrder.h"
#include "Person.h"
#include "Material.h"

/// class Receipt - 
class Receipt {
  // Associations
  PurchaseOrder* unnamed;
  Person* unnamed;
  Material* unnamed;
  // Attributes
public:
  int ReceiptNumber;
  int PONumber;
  char(40) MaterialCode;
  dec Quantity;
  date Date;
  time Time;
  char(20) Person;
  /// (R)eceipt ReturnTo(S)upplier S(C)rap
  char(1) Type;
  // Operations
public:
  ReceiveGoods ();
  ReturnGoods ();
  PrintQRLabel ();
};

