package java07_Class_OOP;

public class JavaLessonSeven {
	public static void main(String[] args) {

		Monster Frank = new Monster();
		// System.out.println(Frank.attack); // Can't access private field from
		// Outside of a class.
		System.out.println(Frank.name + " has an attack of "
				+ Frank.getAttack() + ".");
		Frank.name = "Big Frank";
		System.out.println(Frank.name + " has an attack of "
				+ Frank.getAttack() + ".");
	}
}
