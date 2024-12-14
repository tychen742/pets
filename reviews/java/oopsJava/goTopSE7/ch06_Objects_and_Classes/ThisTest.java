package ch06_Objects_and_Classes;

public class ThisTest {

	int id;
	static int age;
	String name;

	public void doSomething(int age) {
		ThisTest.age = age;
		System.out.println(age);
	}

}


