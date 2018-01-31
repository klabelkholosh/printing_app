/// class Job - 
class Job {
  // Attributes
public:
  int SONumber;
  date DateRequired;
  char(40) Product;
  dec Quantity;
  /// (P)reparation, (W)orkInProgress, (C)omplete
  char(1) Status;
  int LinkJobNumber;
  char(60) ArtworkAddress;
  /// Calculated
  dec MaterialCost;
protected:
  int JobNumber;
  // Operations
public:
  CRUD ();
  ConfirmMaterial ();
  ConfirmRoute ();
  CalculateRequirement ();
  JobTicket ();
  CalculateBalance ();
};

