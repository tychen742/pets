package book.java7.chapter3;

class Animal {
	void move() {
		System.out.println("All animals can move... ");
	}
}

class Cat extends Animal {
	void move() {
		System.out.println("Cats family can run and jump. ");
	}

	void skill() {
		System.out.println("Cats can roar/miao. ");
	}
}

class Bird extends Animal {
	void move() {
		System.out.println("Flying... ");
	}
}

class Tiger extends Cat {
	void skill() {
		System.out.println("Tigers have hunting skills. ");
	}
}

// class AsianTiger extends Tiger {
// void skill() {
// System.out.println("Asian Tiger crouching... ");
// }
//
// void move() {
// System.out.println("Asian Tiger's move!");
// }
// }

public class Zoo {
	public static void main(String[] args) {
		Tiger t = new Tiger(); // regular and normal
		t.skill();
		t.move();

		Cat c = new Tiger();
		c.skill();// Tiger overrides Cat's method
		c.move();
		
		 Animal a = new Tiger();
		 a.move();
//		 a.skill();
		 ((Tiger) a).skill(); // forced to use own skill
		 ((Cat) a).skill(); // Tiger skill overrides Cat skill
		 if (a instanceof Bird) {
		  ((Bird) a).move();
		 } else {
			 System.out.println("Object variable a can not be cast to Bird");
		 }

		// Tiger tat = new AsianTiger();
		// tat.skill(); // Tiger's skill overridden by Asian Tiger
		// tat.move(); // Tiger's move overridden by Asian Tiger

	}
}