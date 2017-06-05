/// class TypeAttributes - 
class TypeAttributes {
  // Attributes
public:
  char(10) TypeCode;
  char(60) AttrName;
  char(60) AttrValue;
  /// (C)haracter, (D)ecimal), (I)nteger
  Char(1) AttrValidation;
  // Operations
public:
  CRUD ();
};

