package src;

class A {
	static String name = "A";

	static String greeting() {
		return "Class A";
	}
}

class B extends A {
	static String name = "B";
	static String greeting() {
		return "Class B";
	}
}

public class Test3 {
	public static void main(String[] args) {

		Test t = new Test();

		A a = new A();
		System.out.println(a.name);
		
		A b = new B();
		System.out.println(b.name);
		System.out.println(b.greeting());
	}

}
