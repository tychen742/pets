<<<<<<< HEAD
package exam803;

public class Q025 {
	public static void main(String[] args) throws Exception {
		try {
			doSomething();
			System.out.println("test");
		} catch (Exception e) {
			System.out.println("Exception caught.");
		}
	}

	private static void doSomething() throws Exception {
		System.out.println("Before if clause.");
		if (Math.random() > 0.5) {
			throw new Exception();
		}
		System.out.println("After if clause.");
	}
}
=======
package exam803;

public class Q025 {
	public static void main(String[] args) throws Exception {
		try {
			doSomething();
			System.out.println("test");
		} catch (Exception e) {
			System.out.println("Exception caught.");
		}
	}

	private static void doSomething() throws Exception {
		System.out.println("Before if clause.");
		if (Math.random() > 0.5) {
			throw new Exception();
		}
		System.out.println("After if clause.");
	}
}
>>>>>>> main
