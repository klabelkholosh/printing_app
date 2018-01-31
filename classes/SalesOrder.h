/// class SalesOrder - 
class SalesOrder {
  // Attributes
public:
  char(10) CustomerCode;
  date Date;
  date RequiredDate;
  /// (Q)uoted, (I)nProduction (C)omplete
  Char(1) Status;
protected:
  int SONumber;
  // Operations
public:
  CRUD ();
  SendQuote ();
  Confirm ();
};

