<<<<<<< HEAD
package exam803;

import java.io.IOException;

public class Q011 {

	public static void main(String[] args)  {
		try {
			doSomething();
		} catch (RuntimeException | IOException e) {
			System.out.println(e);
		}
	}

	static void doSomething() throws IOException  {
		if (Math.random() > 0.5)
			throw new IOException();
		throw new RuntimeException();
	}

}
=======
package exam803;

import java.io.IOException;

public class Q011 {

	public static void main(String[] args)  {
		try {
			doSomething();
		} catch (RuntimeException | IOException e) {
			System.out.println(e);
		}
	}

	static void doSomething() throws IOException  {
		if (Math.random() > 0.5)
			throw new IOException();
		throw new RuntimeException();
	}

}
>>>>>>> main
