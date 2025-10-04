<<<<<<< HEAD
package part23_Interfaces;

public class Person implements Info {
	String name = "Dr. Chen";

	public Person(String name) {
		this.name = name;
	}

	void greet() {
		System.out.println("Hello!");
	}

	@Override
	public // must be public
	void showInfo() {
		System.out.println("The person's name is: " + name);
	}

}
=======
package part23_Interfaces;

public class Person implements Info {
	String name = "Dr. Chen";

	public Person(String name) {
		this.name = name;
	}

	void greet() {
		System.out.println("Hello!");
	}

	@Override
	public // must be public
	void showInfo() {
		System.out.println("The person's name is: " + name);
	}

}
>>>>>>> main
