<<<<<<< HEAD
package book.java7.chapter3;
class superClass {
	String name = "Super";
	String getName() {
		return name;
	}
	String greeting() {
		return "Super says hi";
	}
}
class subClass extends superClass {
	String name = "Sub";
	String greeting() {
		return "Sub says hi";
	}

	void foo() {
		System.out.println(name);
		System.out.println(this.name);
		System.out.println(super.name);
		System.out.println(((subClass) this).name);
		System.out.println(((superClass) this).name);
		System.out.println(((subClass) this).greeting());
		System.out.println(((superClass) this).greeting());
	}
}

public class Polymorphism2 {
	public static void main(String[] args) {
		new subClass().foo();
	}
}
=======
package book.java7.chapter3;
class superClass {
	String name = "Super";
	String getName() {
		return name;
	}
	String greeting() {
		return "Super says hi";
	}
}
class subClass extends superClass {
	String name = "Sub";
	String greeting() {
		return "Sub says hi";
	}

	void foo() {
		System.out.println(name);
		System.out.println(this.name);
		System.out.println(super.name);
		System.out.println(((subClass) this).name);
		System.out.println(((superClass) this).name);
		System.out.println(((subClass) this).greeting());
		System.out.println(((superClass) this).greeting());
	}
}

public class Polymorphism2 {
	public static void main(String[] args) {
		new subClass().foo();
	}
}
>>>>>>> main
