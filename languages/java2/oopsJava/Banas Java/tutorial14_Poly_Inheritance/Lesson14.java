package tutorial14_Poly_Inheritance;

public class Lesson14 {

	public static void main(String[] args) {
		Animals genericAnimal = new Animals();
		System.out.println(genericAnimal.getName());
		System.out.println(genericAnimal.favFood);
		
		Cat morris = new Cat("Morris", "Tuna", "Rubbe Mouse");
		System.out.println(morris.getName());
		System.out.println(morris.favFood);
		System.out.println(morris.favToy);
		
		Animals tabby = new Cat("Tabby", "Salmon", "Ball");
		
		acceptAnimal(tabby);
		
	}
	
	static void acceptAnimal(Animals randAnimal) {
		System.out.println(randAnimal.getName());
		System.out.println(randAnimal.favFood);
		
		randAnimal.walkAround();
		
//		System.out.println(randAnimal.favToy);
		Cat tempCat = (Cat) randAnimal;
		System.out.println(tempCat.favToy);
		
		System.out.println(((Cat)randAnimal).favToy);
		
		if (randAnimal instanceof Cat) {
			System.out.println(randAnimal.getName() + " is a cat.");
		}
	}
}
