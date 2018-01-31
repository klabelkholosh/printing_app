/// class Customer - 
class Customer {
  // Attributes
public:
  char(40) Name;
  /// (A)ctive, (P)rospect, (H)eld, (I)nactive
  char(1) Status;
  char(60) LoginEmail;
  char(20) Password;
protected:
  char(10) CustomerCode;
  // Operations
public:
  CRUD ();
};

