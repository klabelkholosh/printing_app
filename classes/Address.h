/// class Address - 
class Address {
  // Attributes
public:
  char(60) Contact;
  varchar Detail;
  /// (D)elivery, (I)nvoice, (S)tatement
  char(1) Type;
protected:
  int AddressNumber;
  // Operations
public:
  CRUD ();
};

