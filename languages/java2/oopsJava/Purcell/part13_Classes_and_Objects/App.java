package part13_Classes_and_Objects;

class Person {
	// fields or instance variables (data or state)
	String name;
	int age;
	int height;
	int weight;

}

public class App {
	public static void main(String[] args) {
		Person person1 = new Person();
		person1.name = "Joe Bloggs"; // dot notification. 
		person1.age = 37; // (object reference).fieldname
		person1.height = 180;
		
		Person person2 = new Person();
		person2.name = "Chen";
		person2.age = 35;
		person2.height = 175;
		
		Person person3 = new Person();
		person3.name = "Lee";
		person3.height = 185;
		person3.weight = 80;
		
		System.out.println(person2.name);
	}

}
