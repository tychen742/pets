package ch07_Inheritance_Interface_Polymorphism;

class D implements InterfaceA {

	public static void main(String[] args) {
		// A a = new A(); // No instantiation for Abstract Class
		// B b = new B();
		C c = new C();
		c.doSomethingA();
		c.doSomethingB();

		D d = new D();
		d.doSomethingD();

	}

	@Override
	public void doSomethingD() { // must use public to implement Interface
		System.out.println("Do something D");
	}

}
