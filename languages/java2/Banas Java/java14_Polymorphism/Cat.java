package java14_Polymorphism;

// extends: copy all the methods and fields defined in Animals => Inheritance
public class Cat extends Animal {
	
	public String favoriteToy = "Yarn"; //favoriteToy
	public void playWith() {
		System.out.println("Yeah! " + favoriteToy);
	}
	
	public void walkAround() {
		System.out.println(this.getName() + " runs around~~");
	}

	public String getToy(){
		return this.favoriteToy;
	}
	
	public Cat(){
		
	}
	
	public Cat(String name, String favoriteFood, String favoriteToy){
		super(name, favoriteFood );
		this.favoriteToy = favoriteToy;
	}
}
