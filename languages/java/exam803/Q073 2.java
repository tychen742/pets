<<<<<<< HEAD
package exam803;

public class Q073 {

	static void one() {
		two();
		Q073.two();
		// three();
		// Q073.four();
		new Q073().four(); // calling object method
	}

	static void two() {
		System.out.println("Two");
	}

	void three() {
		one();
		Q073.two();
		four();
		// Q073.four();
	}

	void four() {
		System.out.println("Four");
	}
}
=======
package exam803;

public class Q073 {

	static void one() {
		two();
		Q073.two();
		// three();
		// Q073.four();
		new Q073().four(); // calling object method
	}

	static void two() {
		System.out.println("Two");
	}

	void three() {
		one();
		Q073.two();
		four();
		// Q073.four();
	}

	void four() {
		System.out.println("Four");
	}
}
>>>>>>> main
