<<<<<<< HEAD
package part23_Interfaces;
// Interface forces classes to implement methods
// can not do "new" with interfaces; new must be followed by a class name. 
// and an interface is not a class.
// But interface can be used as Type

public class App {
	public static void main(String[] args) {

		Machine mach1 = new Machine();
		mach1.start();
		mach1.showInfo();

		Person person1 = new Person("Polo");
		person1.greet();
		person1.showInfo();

		Info info1 = new Machine();
		// variable of type Info point to an object of type Machine
		// create a machine to use Info interface methods. 
		
		info1.showInfo(); // can be used because showInfo is defined in the
							// interface

		Info info2 = person1; // person1 is of type Person, and can be pointed
								// to Info
		info2.showInfo(); // because Person implements Info

		System.out.println();

		outputInfo(mach1); // Machine implements Info interface; mach1 is an
							// object to be passed to the outputInfo method
		outputInfo(person1);

		mach1.machTest();
		((Machine) info1).machTest();
		// ((Machine) person1).machTest(); // Can't cast from Person to Machine
		((Machine) info2).machTest(); // will pass the compile but will have
										// ClassCastException
	}

	// a method can implement an interface:
	private static void outputInfo(Info infoObj) { // infoObj is an object
		infoObj.showInfo(); // showInfo is the method in Info interface
		// but the mach1 and person1 passed are in classes that implements Info

	}

}
=======
package part23_Interfaces;
// Interface forces classes to implement methods
// can not do "new" with interfaces; new must be followed by a class name. 
// and an interface is not a class.
// But interface can be used as Type

public class App {
	public static void main(String[] args) {

		Machine mach1 = new Machine();
		mach1.start();
		mach1.showInfo();

		Person person1 = new Person("Polo");
		person1.greet();
		person1.showInfo();

		Info info1 = new Machine();
		// variable of type Info point to an object of type Machine
		// create a machine to use Info interface methods. 
		
		info1.showInfo(); // can be used because showInfo is defined in the
							// interface

		Info info2 = person1; // person1 is of type Person, and can be pointed
								// to Info
		info2.showInfo(); // because Person implements Info

		System.out.println();

		outputInfo(mach1); // Machine implements Info interface; mach1 is an
							// object to be passed to the outputInfo method
		outputInfo(person1);

		mach1.machTest();
		((Machine) info1).machTest();
		// ((Machine) person1).machTest(); // Can't cast from Person to Machine
		((Machine) info2).machTest(); // will pass the compile but will have
										// ClassCastException
	}

	// a method can implement an interface:
	private static void outputInfo(Info infoObj) { // infoObj is an object
		infoObj.showInfo(); // showInfo is the method in Info interface
		// but the mach1 and person1 passed are in classes that implements Info

	}

}
>>>>>>> main
