package ch07_Inheritance_Interface_Polymorphism;

class C extends B {

	// void doSomethingA() {
	//
	// }
	//
	// void doSomethingB() {
	//
	// }

	public static void main(String[] args) {
		System.out.println("Nothing.");
		// B b = new B(); // cannot instantiate B
	}

	@Override
	void doSomethingB() {
		System.out.println("doSomething B");
	}

	@Override
	void doSomethingA() {
		System.out.println("doSomething A");
	}
}
