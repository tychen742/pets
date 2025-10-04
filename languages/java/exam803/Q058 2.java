<<<<<<< HEAD
package exam803;

public class Q058 {
public static void main (String[] args) {
	Tiger tigerA = new Tiger();
	tigerA.aMethod();
//	tigerA.cMethod();
	
	Tiger tigerB = (Tiger)new Cat();
	tigerB.aMethod();
//	tigerB.bMethod();
}
}

class Animal {
	
}

class Cat extends Animal {
	void aMethod() {
		System.out.println("aMethod in class Cat");
	}
//	void cMethod() {
//		System.out.println("cMethod in class Cat");
//	}
}

class Bird extends Animal {
	
}

class Tiger extends Cat {
	void aMethod(){
		System.out.println("aMethod in class Tiger");
	}
	// void bMethod(){
	// System.out.println("bMethod in class Tiger");
	// }
=======
package exam803;

public class Q058 {
public static void main (String[] args) {
	Tiger tigerA = new Tiger();
	tigerA.aMethod();
//	tigerA.cMethod();
	
	Tiger tigerB = (Tiger)new Cat();
	tigerB.aMethod();
//	tigerB.bMethod();
}
}

class Animal {
	
}

class Cat extends Animal {
	void aMethod() {
		System.out.println("aMethod in class Cat");
	}
//	void cMethod() {
//		System.out.println("cMethod in class Cat");
//	}
}

class Bird extends Animal {
	
}

class Tiger extends Cat {
	void aMethod(){
		System.out.println("aMethod in class Tiger");
	}
	// void bMethod(){
	// System.out.println("bMethod in class Tiger");
	// }
>>>>>>> main
}