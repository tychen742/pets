<<<<<<< HEAD
package exceptions;

public class NoCatch {
	public static void throwit() {
		throw new RuntimeException();
	}
	public static void main(String args[]) {
		try {
			System.out.println("Hello world");
			throwit();
			System.out.println("Done with try block ");
		} finally {
			System.out.println("Finally executing ");
		}
	}

}
=======
package exceptions;

public class NoCatch {
	public static void throwit() {
		throw new RuntimeException();
	}
	public static void main(String args[]) {
		try {
			System.out.println("Hello world");
			throwit();
			System.out.println("Done with try block ");
		} finally {
			System.out.println("Finally executing ");
		}
	}

}
>>>>>>> main
