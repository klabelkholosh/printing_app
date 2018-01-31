/// class MatGroup - 
class MatGroup {
  // Attributes
public:
  char(40) Description;
  /// (F)inished Goods, (R)aw Material
  char(1) Type;
  /// Make Ready Sheets or Metres per colour
  int MRQty;
  /// Mark up the material to get to a selling price
  dec MarkupPercentage;
  char StockUnit;
  char PriceUnit;
  /// Convert from Stock unit to Price unit
  dec StockConv;
protected:
  /// 						
  char(10) GroupCode;
  // Operations
public:
  CRUD ();
};

