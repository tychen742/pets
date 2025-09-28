package book.java7.chapter3;

interface Pet2 {
	String attr = "cute";

	void skill();

	void move();
}

public class AnonymousClass {
	public static void main(String[] args) {
		Pet2 p = new Pet2() {
			public void skill() {
				System.out.println("I know how to shake hand!");
			}

			public void move() {
				System.out.println("I know how to run!");
			}
		};
		p.skill();
		p.move();
	}
}
