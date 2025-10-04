<<<<<<< HEAD
package book.java7.chapter3;
// methods will be overridden but fields stay with the forced Type

class Father {
	String name = "Father";
	String getName() {
		return name;
	}
	String greeting() {
		return "class Father says Hello";
	}
}

class Son extends Father {
	String name = "Son";
	String greeting() {
		return "class Son says Hello";
	}
}

public class Polymorphism {
	public static void main(String[] args) {
		Father father = new Father();
		System.out.print(father.greeting() + ", ");
		System.out.print(father.name + ", ");
		System.out.print(father.getName());
		
		System.out.println();
		
		Father father2 = new Son();
		System.out.print(father2.greeting() + ", ");
		System.out.print(father2.name + ", ");
		System.out.print(father2.getName());		
	}
}
=======
package book.java7.chapter3;
// methods will be overridden but fields stay with the forced Type

class Father {
	String name = "Father";
	String getName() {
		return name;
	}
	String greeting() {
		return "class Father says Hello";
	}
}

class Son extends Father {
	String name = "Son";
	String greeting() {
		return "class Son says Hello";
	}
}

public class Polymorphism {
	public static void main(String[] args) {
		Father father = new Father();
		System.out.print(father.greeting() + ", ");
		System.out.print(father.name + ", ");
		System.out.print(father.getName());
		
		System.out.println();
		
		Father father2 = new Son();
		System.out.print(father2.greeting() + ", ");
		System.out.print(father2.name + ", ");
		System.out.print(father2.getName());		
	}
}
>>>>>>> main
