package tutorial15_Interface;

public interface Drivable {

	double PI = 3.14;
	
	public abstract int getWheels();
	void setWheels(int numWheels);
	double getSpeed();
	void setSpeed(double speed);
}
