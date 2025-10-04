<<<<<<< HEAD
package tutorial16_Object_Class;

import tutorial15_Interface.Vehicle;

public class Lesson16 {
	public static void main(String[] args) {
		
		Object superCar = new Vehicle();
		
		System.out.println(((Vehicle)superCar).getSpeed());
		
		Vehicle superTruck = new Vehicle();
		
		System.out.println(superCar.equals(superTruck));
		
		System.out.println(superCar.hashCode());
		
		System.out.println(superCar.getClass());
		
		System.out.println(superCar.getClass().getName());
		
		if (superCar.getClass() == superTruck.getClass()) {
			System.out.println("The Same");
		}
		
		System.out.println();
		
		System.out.println(superCar.getClass().getSuperclass());
		
		System.out.println(superCar.toString());
		
		int randNum = 100;
		System.out.println(Integer.toString(randNum));
		
		superTruck.setWheels(6);
		Vehicle superTruck2 = (Vehicle)superTruck.clone();
		System.out.println(superTruck.getWheels());
		System.out.println(superTruck2.getWheels());
		
		System.out.println(superTruck.hashCode());
		System.out.println(superTruck2.hashCode());
		
	}

}
=======
package tutorial16_Object_Class;

import tutorial15_Interface.Vehicle;

public class Lesson16 {
	public static void main(String[] args) {
		
		Object superCar = new Vehicle();
		
		System.out.println(((Vehicle)superCar).getSpeed());
		
		Vehicle superTruck = new Vehicle();
		
		System.out.println(superCar.equals(superTruck));
		
		System.out.println(superCar.hashCode());
		
		System.out.println(superCar.getClass());
		
		System.out.println(superCar.getClass().getName());
		
		if (superCar.getClass() == superTruck.getClass()) {
			System.out.println("The Same");
		}
		
		System.out.println();
		
		System.out.println(superCar.getClass().getSuperclass());
		
		System.out.println(superCar.toString());
		
		int randNum = 100;
		System.out.println(Integer.toString(randNum));
		
		superTruck.setWheels(6);
		Vehicle superTruck2 = (Vehicle)superTruck.clone();
		System.out.println(superTruck.getWheels());
		System.out.println(superTruck2.getWheels());
		
		System.out.println(superTruck.hashCode());
		System.out.println(superTruck2.hashCode());
		
	}

}
>>>>>>> main
