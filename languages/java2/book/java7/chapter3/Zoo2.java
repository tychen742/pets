package book.java7.chapter3;

class Animal3 {
	public void move() {
		System.out.println("Animals move");
	}
}
class Cat3 extends Animal3 {
	@Override
	public void move() {
		System.out.println("Cats jump");
	}
}
class Bird3 extends Animal3 {
	@Override
	public void move() {
		System.out.println("Birds fly");
	}
}
class Tiger3 extends Cat3 {
	@Override
	public void move() {
		System.out.println("Tigers run");
	}
}
public class Zoo2 {
//	public static void getMove(Animal3 animal) {
//		animal.move();
//	}
//	public static void getMove(Cat3 cat) {
//		cat.move();
//	}
//	public static void getMove(Bird3 bird) {
//		bird.move();
//	}
//	public static void getMove(Tiger3 tiger) {
//		tiger.move();
//	}
//	

	public static void getMove(Animal3 animal) {
		animal.move();
	}
	
	public static void main (String[] args) {
		Animal3 animal = new Animal3();
		Cat3 cat = new Cat3();
		Bird3 bird = new Bird3();
		Tiger3 tiger = new Tiger3();
		getMove(animal);
		getMove(cat);
		getMove(bird);
		getMove(tiger);
	}

}
