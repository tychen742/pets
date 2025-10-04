// Classes: blueprints for creating objects
// getter & setter
// Constructor
public class Java07_Class_Monster {
	
	// final: define a Constant
	public final String TOMBSTONE = "Here lies a dead monster";
	
	// 	class variables = fields
	private int health = 500;
	private int attack = 20;
	private int movement = 2;
	private int xPosition = 0;
	private int yPosition =0;
	private boolean alive = true;
	
	public String name = "Big Monster";
/*
 * Accessor Method: to access the private variables
 */
	public int gethealth() {
		return health;	}
	public int getAttack() {
		return attack;	}
	public int getMovement() {
		return movement;	}
	public int getxPosition() {
		return xPosition;	}
	public int getyPosition() {
		return yPosition;	}
	public boolean getAlive() {
		return alive;		}

	public void sethealth(int decreaseHealth) { // public, to set the health for a monster
		health = health - decreaseHealth;
		if (health <= 0) {
			alive = false;		} }	
	
	// Overloaded Method: same method name, different attributes
	public void setHealth(double decreaseHealth) {
		int intDecreaseHealth = (int) decreaseHealth;
		health = health - intDecreaseHealth;
		if (health <=0) {
			alive = false;	} 	}
	
	// Constructor: The first object created based on the class blueprint
	// Executed once only per object. 
	// Can not return Void, no return
	public Java07_Class_Monster (int health, int attack, int movement) {
		this.health = health; // this keyword for constructor 
		this.attack = attack; // this = current object = class field
		this.movement = movement;	}
	// default 
	public Java07_Class_Monster() { // twice? overload
		// TODO Auto-generated constructor stub
	}
	public Java07_Class_Monster(int newHealth) {
		health = newHealth;	}
	public Java07_Class_Monster(int newHealth, int newAttack) {
		this(newHealth);
		attack = newAttack; 	}

	public static void main(String[] args) {
		Java07_Class_Monster Frank = new Java07_Class_Monster();
		System.out.println(Frank.attack); // can print a private field because inside of class
	}

}
	
	