/// class Product - 
class Product {
  // Attributes
public:
  varchar Description;
  char(20) ProdType;
  char(20) PriceUnit;
  /// Zero price indicates a quote is required
  dec Price;
  char CustomerCode;
protected:
  char(40) ProductCode;
  // Operations
public:
  CRUD ();
};

