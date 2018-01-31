/// class Material - 
class Material {
  // Attributes
public:
  varchar Description;
  char(10) MatGroup;
  /// (S)heet, (R)eel, (C)oating, S(U)ndry
  char(1) Type;
  dec MinimumStock;
  /// (N)ormal (C)onsignment (L)ow in stock (D)eprecated
  char(1) Status;
  dec AveragePrice;
protected:
  char(40) MaterialCode;
  // Operations
public:
  CRUD ();
  CalculateStockOnHand ();
  StockCard ();
  LowStockWarning ();
};

