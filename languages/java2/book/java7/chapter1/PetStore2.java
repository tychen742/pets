package book.java7.chapter1;

public class PetStore2 {

	public static void main(String[] args) {

		String fishName = book.java7.chapter1.water.Fish.name;
		String fishKind = book.java7.chapter1.water.Fish.type;
		String fishColor = book.java7.chapter1.water.Fish.color;

		System.out.println(
				"I have an elegant " + fishKind + ", whose name is " + fishName + ". Its color is " + fishColor + ".");
		// System.out.println("test");

		System.out.print("When it is hungry it would ");
		book.java7.chapter1.water.Fish.skill();

	}
}