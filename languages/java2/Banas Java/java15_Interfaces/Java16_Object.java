package java15_Interfaces;

public class Java16_Object {
	public static void main(String[] args) {

		Object superCar = new Vehicle();

		System.out.println(((Vehicle) superCar).getSpeed());

		Vehicle superTruck = new Vehicle();
		System.out.println(superCar.equals(superTruck)); // hashCodes not equal

		System.out.println(superCar.hashCode());// hashCode

		System.out.println(superCar.getClass());

		System.out.println(superCar.getClass().getName());

		if (superCar.getClass() == superTruck.getClass()) {
			System.out.println("The same.");
		}
		
		System.out.println(superCar.getClass().getSuperclass());
	
		System.out.println(superCar.toString());
		
		int randNum = 100;
		System.out.println(Integer.toString(randNum));
		
		// clone method
		superTruck.setWheels(6);
		Vehicle superTruck2 = (Vehicle)superTruck.clone();
		System.out.println(superTruck.getWheels());
		System.out.println(superTruck2.getWheels());
		
		System.out.println(superTruck.hashCode());
		System.out.println(superTruck2.hashCode());
		
	}
}