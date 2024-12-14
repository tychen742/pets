// Methods: Global Variable, Local Variable; 

public class Java05_Method_Variables { // defining this class program
	static double myPi = 3.14159; // a Class Variable, starts with static,
									// accessible from other classes and to
									// functions here.

	public static void main(String[] args) { // use main, Ctl+space; main is the
												// program entry
		/*
		 * accessModifier static returnType methodName (parameter/argument)
		 */
		// defining method/function: change name
		// use Static when want to execute a method that is not part of the
		// class definition
		// not part of the class

		addThem(1, 2); // call to the addThem method/function // this runs first
		System.out.println("Global myPi 2: " + myPi);// this 2nd
		// note the order of code execution

	}

	public static int addThem(int a, int b) { // addThem: method name; int
												// before args
		@SuppressWarnings("unused")
		double smallPI = 3.14; // Local Variable: only accessible inside the
								// method addThem; can pass value out of
								// addThem, but no access to local variable
		System.out.println("Global myPi 1: " + myPi); // accessible

		// double myPi = 3; // double: declaring a new variable
		myPi = 3; // overwriting global CV
		System.out.println("Local myPi: " + myPi); // overwrite:
		// When defining methods, you can use your Class Variable anywhere; you
		// can also overwrite the CV value;
		// Overwriting does not change the global CV value
		return 1; // junk value because int is declared instead of void.
	}
}
