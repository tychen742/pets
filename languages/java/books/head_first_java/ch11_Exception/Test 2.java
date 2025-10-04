<<<<<<< HEAD
package ch11_Exception;

public class Test {

	private int size = 1001;

	public int getSize() {
		return size;
	}

	public void setSize(int size) {
		this.size = size;
	}

	private String string;

	public String getString() {
		return string;
	}

	public void setString(String string) {
		this.string = string;
	}

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		Test test1 = new Test();
		test1.setSize(91999);
		System.out.println(test1.getSize());
		int localVarY = 0;
		int x = test1.getSize();
		int z = x + localVarY;
		System.out.println("z = " + z);
		System.out.println(test1.getString());

		int a = 3;
		int b = 00003;
		if (a == b) {
			System.out.println("true");
		}

		Test aa = test1;
		Test bb = test1;
		System.out.println(aa == bb);
		
		byte bYte = 3;
		doSomething(bYte);
		
		
		
	}
	
	static void doSomething(int foo ) {
		System.out.println(foo);
	}

}
=======
package ch11_Exception;

public class Test {

	private int size = 1001;

	public int getSize() {
		return size;
	}

	public void setSize(int size) {
		this.size = size;
	}

	private String string;

	public String getString() {
		return string;
	}

	public void setString(String string) {
		this.string = string;
	}

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		Test test1 = new Test();
		test1.setSize(91999);
		System.out.println(test1.getSize());
		int localVarY = 0;
		int x = test1.getSize();
		int z = x + localVarY;
		System.out.println("z = " + z);
		System.out.println(test1.getString());

		int a = 3;
		int b = 00003;
		if (a == b) {
			System.out.println("true");
		}

		Test aa = test1;
		Test bb = test1;
		System.out.println(aa == bb);
		
		byte bYte = 3;
		doSomething(bYte);
		
		
		
	}
	
	static void doSomething(int foo ) {
		System.out.println(foo);
	}

}
>>>>>>> main
