package java65_Design_Pattern_OOP;

public class Dog extends Animal {

	public void digHole() {
		System.out.println("Dug a hole.");
	}

	public Dog() { // constructor
		super(); // reference the constructor file or the initializer
		setSound("Bark!");
	}

	public void changeVar(int randNum) {
		randNum = 12;
		System.out.println("randNum in method: " + randNum);
	}
}
