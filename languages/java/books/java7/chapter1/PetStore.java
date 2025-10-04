package book.java7.chapter1;

public class PetStore {
	public static void main(String[] args) {
		String dogName = Puppy.name;
		String dogKind = Puppy.type;
		String dogColor = Puppy.color;
		System.out.println("I have a smart " + dogKind + " dog, whose name is " + dogName + ", whose color is " + dogColor + ".");
		System.out.println("He helps me everyday.");
		Puppy.skill();
		
		String dogSkill = Puppy.skill2();
		System.out.println(dogSkill);
//		Puppy.skill2();
	}
}
