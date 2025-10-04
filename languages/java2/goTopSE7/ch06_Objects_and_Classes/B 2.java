package ch06_Objects_and_Classes;

public class B extends A {

	B(String name, int id) {
		super(name, id);
	}

	// @Override
	static void doSomething() {
		System.out.println("B do something");
	}

	public static void main(String[] args) {

		B.doSomething();
		A.doSomething();

		B aa = new B("Polo", 100);
		aa.doSomething();

	}
}
