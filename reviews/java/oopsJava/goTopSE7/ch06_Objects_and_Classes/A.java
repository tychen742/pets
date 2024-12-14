package ch06_Objects_and_Classes;

public class A {
	String name;
	int id;

	A(String name, int id) {
		this.name = name;
		this.id = id;
	}

	public static void main(String[] args) {

		System.out.println(3);

		A a1 = new A("Polo", 18);
		System.out.println(a1.name);
		
	}
	
	static void doSomething() {
		System.out.println("A do something!");
	}

}
