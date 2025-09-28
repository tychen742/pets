package java65_Design_Pattern_OOP;

public class WorkWithAnimals {

	public static void main(String[] args) {
		Dog fido = new Dog();
		fido.setName("Fido");
		System.out.println(fido.getName());

		fido.digHole();
		fido.setWeight(1); // everything is passed by value in Java

		int randNum = 10;
		fido.changeVar(randNum);
		System.out.println("randNumber after 2" + randNum);

		System.out.println("randNum after method call: ");
	}

	public static void changeObjectName(Dog fido) {
		fido.setName("Marcus");
	}
}
