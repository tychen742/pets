package java14_Polymorphism;

public class Java14 {
	public static void main(String[] args) {
		Animal genericAnimal = new Animal();

		System.out.println(genericAnimal.getName());
		System.out.println(genericAnimal.favoriteFood);

		System.out.println();

		Cat morris = new Cat("Morris", "Tuna", "Rubber Mouse");
		System.out.println(morris.getName());
		System.out.println(morris.favoriteFood);
		System.out.println(morris.favoriteToy);

		Animal tabby = new Cat("Tabby", "Salmon", "Ball");
		acceptAnimal(tabby);
	}

	public static void acceptAnimal(Animal randAnimal) {
		System.out.println();
		System.out.println(randAnimal.getName());
		System.out.println(randAnimal.favoriteFood);
		
		randAnimal.walkAround();
		
		Cat tempCat = (Cat) randAnimal; // cast indirectly
		System.out.println(tempCat.favoriteToy); 
		System.out.println(((Cat)randAnimal).favoriteToy); // cast directly 
		
		if( randAnimal instanceof Cat) {
			System.out.println(randAnimal.getName() + " is a cat!");
		}

	}
}
