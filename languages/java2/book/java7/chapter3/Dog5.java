package book.java7.chapter3;

public class Dog5 implements Pet {

	@Override
	public void skill() {
		System.out.println("Play ball");
	}

	@Override
	public void move() {
		System.out.println("Run and jump");
	}

	public static void main(String[] args) {
		Dog5 dog = new Dog5();
		dog.skill();
		dog.move();
	}

}
