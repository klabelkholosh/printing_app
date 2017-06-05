#include "Product.h"
#include "Material.h"

/// class DefaultMaterial - 
class DefaultMaterial {
  // Associations
  Product* unnamed;
  Material* unnamed;
  // Attributes
public:
  char(20) ProductCode;
  char(60) DefaultName;
  dec DefaultValue;
  char(40) DefaultMaterial;
  dec DefaultQty;
  // Operations
public:
  CRUD ();
};

