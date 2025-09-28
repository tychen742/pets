package java15_Interfaces;

public class Vehicle extends Crashable implements Drivable, Cloneable {
	int numOfWheels = 2;
	double theSpeed = 0;
	int carStrength = 0;
// interface methods are implemented here in 
	// methods based off an interface must be 
	//at least as visible as the interface itself
	public int getWheels() { 
		return this.numOfWheels;	}
	public void setWheels(int numWheels) {
		this.numOfWheels = numWheels;	}
	public double getSpeed() {
		return this.theSpeed;	}
	public void setSpeed(double speed) {
		this.theSpeed = speed;	}
	public Vehicle(int wheels, double speed) {
		this.numOfWheels = wheels;
		this.theSpeed = speed;	}
	public Vehicle() {	}
	public void setCarStrength(int carStrength) { // from abstract class
		this.carStrength = carStrength;	} 
	public int getCarStrength() { // from abstract class
		return this.carStrength;	}
	public String toString() {
		return "Number of wheels: " + this.numOfWheels;	}
	public Object clone() {
		Vehicle car;
		try { car = (Vehicle) super.clone();
		} catch (CloneNotSupportedException e) {
			return null;		}
		return car;	}
}
