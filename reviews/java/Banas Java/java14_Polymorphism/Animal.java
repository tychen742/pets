package java14_Polymorphism;

//Protected method; Polymorphism; 
public class Animal { // the Superclass
	private String name = "Animal"; // only this class can access it
	public String favoriteFood = "Food"; // everyone can access it

	// protected methods allow subclasses to access
	protected final void changeName(String newName) {
		// final: subclasses can not change this method
		this.name = newName; // this: the Animals class blueprint
	}

	protected final String getName() {
		return this.name;
	}

	public void eatStuff() {
		System.out.println("Yum, " + favoriteFood);
	}

	public void walkAround() {
		System.out.println(this.name + "walks around.");
	}

	public Animal() {

	}

	public Animal(String name, String favoritFood) {
		this.changeName(name);
		this.favoriteFood = favoritFood;
	}

}
