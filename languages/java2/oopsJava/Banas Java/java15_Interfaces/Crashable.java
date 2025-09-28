package java15_Interfaces;

// abstract class: methods do not have to be implemented
public abstract class Crashable {
	boolean carDrivable = true;
	
	public void youCrashed() {
		this.carDrivable = false;
	}
	
	public abstract void setCarStrength (int carStrength);
	public abstract int getCarStrength();

}
