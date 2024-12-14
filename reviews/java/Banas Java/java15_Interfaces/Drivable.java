package java15_Interfaces;

// adding functionalities to a class already inheriting from another class
public interface Drivable { // adjective to modify noun (class)
// interface: empty class to tell someone what methods they MUST implement to
// use the interface

	double PI = 3.14; // fields in interface are final

	int getWheels(); // methods are public abstract in interace by default

	void setWheels(int numWheels);

	double getSpeed();

	void setSpeed(double speed);

}
