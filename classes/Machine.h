/// class Machine - 
class Machine {
  // Attributes
public:
  char(60) Description;
  /// Sheets or metres per hour
  dec Speed;
  /// (S)heet (R)eel (D)igital 
  string Type;
protected:
  char(20) MachineCode;
  // Operations
public:
  CRUD ();
  Schedule ();
};

