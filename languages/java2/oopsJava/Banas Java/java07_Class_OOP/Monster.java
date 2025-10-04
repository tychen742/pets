// create class, overload method, overload constructor, 
package java07_Class_OOP;

public class Monster {

	public final String TOMBSTONE = "Here lies a dead moster"; // constant
	private int health = 500; // use as many (private) class variables or fields
								// as possible
	private int attack = 20; // always try stay private unless really necessary
								// to go public
	private int movement = 2; // class variables belong to a class, instance
								// variables belong to an object.
	private int xPosition = 0;
	private int yPosition = 0;
	private boolean alive = true;

	public String name = "Big Moster";
	public int getAttack() {
		return attack;
	}

	public int getMovement() {
		return movement;
	}

	public int getXPosition() {
		return xPosition;
	}

	public int getYPosition() {
		return yPosition;
	}

	public boolean getAlive() {
		return alive;
	}

	public int getHealth() {
		return attack;
	}

	// Overloading the method
	public void setHealth(int decreaseHealth) {
		health = health - decreaseHealth;
		if (health < 0) {
			alive = false;
		}
	}

	public void setHealth(double decreaseHealth) {
		int intDecreaseHealth = (int) decreaseHealth;
		health = health - intDecreaseHealth;
		if (health < 0) {
			alive = false;
		}
	}

	// Constructor
	public Monster(int newHealth, int newAttack, int movement) {
		health = newHealth;
		attack = newAttack;
		this.movement = movement; // this = the field / class variable
	}

	public Monster() { // overloading the constructor
		// the default constructor
		// will be created by the Java interpreter when no constructor is
		// created
	}

	public Monster(int newHealth) {
		health = newHealth;
	}

	public Monster(int newHealth, int newAttack) {
		this(newHealth); // execute the above constructor
		attack = newAttack;
	}

	
	// private variable
	public static void main(String[] args) {
		Monster Frank = new Monster();
		System.out.println(Frank.attack); // print private variable because inside the class
		
		
	}
}
