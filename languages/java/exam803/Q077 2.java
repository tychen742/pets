<<<<<<< HEAD
package exam803;

public class Q077 {

	public static void main (String[] args) {
		try {
			doSomething();
			}
		catch (Exception e) {
			System.out.println(e);
		}
	}

	static void doSomething() throws Exception {
		int[] ages = new int[4];
		ages[4] = 17;
		doSomethingElse();
	}
	static void doSomethingElse() throws Exception {
		throw new Exception ("Thrown at end of doSomething() method"); 
	}

}
=======
package exam803;

public class Q077 {

	public static void main (String[] args) {
		try {
			doSomething();
			}
		catch (Exception e) {
			System.out.println(e);
		}
	}

	static void doSomething() throws Exception {
		int[] ages = new int[4];
		ages[4] = 17;
		doSomethingElse();
	}
	static void doSomethingElse() throws Exception {
		throw new Exception ("Thrown at end of doSomething() method"); 
	}

}
>>>>>>> main
