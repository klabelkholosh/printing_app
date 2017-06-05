/// class ProdType - 
class ProdType {
  // Attributes
public:
  char(40) Description;
  /// (F)inished Goods, (R)aw Material
  char(1) Type;
protected:
  /// 						
  char(10) TypeCode;
  // Operations
public:
  CRUD ();
};

