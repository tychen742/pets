<<<<<<< HEAD
package book.java7.chapter4;

public class MyResource implements AutoCloseable {

	public void doSomething() {
		System.out.println("Computation completed");
	}

	@Override
	public void close() throws Exception {
		throw new Exception("Close resource");
	}
}
=======
package book.java7.chapter4;

public class MyResource implements AutoCloseable {

	public void doSomething() {
		System.out.println("Computation completed");
	}

	@Override
	public void close() throws Exception {
		throw new Exception("Close resource");
	}
}
>>>>>>> main
