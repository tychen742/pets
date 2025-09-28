package java15_Interfaces;

public class Java15 {
	public static void main(String[] args) {
		
		Vehicle car = new Vehicle (4, 100.00);
		
		System.out.println("Cars max speed " + car.getSpeed());
		System.out.println("Number of wheels " + car.getWheels());
		
		car.setCarStrength(10);
		System.out.println("Strength: " + car.getCarStrength());
	}

}
