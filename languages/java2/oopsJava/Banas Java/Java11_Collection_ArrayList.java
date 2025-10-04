// Collection class
// ArrayList: = Array but auto resize when items added/removed. 

import java.util.ArrayList;
import java.util.Iterator;
import java.util.Arrays;

public class Java11_Collection_ArrayList {

	public static void main(String[] args) {
		ArrayList arrayListOne;
		arrayListOne = new ArrayList(); // default size = 10
		ArrayList arrayListTwo = new ArrayList(); // create array in one line

		ArrayList<String> names = new ArrayList<String>();
		names.add("John Smith");
		names.add("Mohamed Alami");
		names.add("Oliver Miller");

		names.add(2, "Jack Ryan"); // add an item to a specific index

		names.set(0, "John Adams");

		for (int i = 0; i < names.size(); i++) {
			System.out.println(names.get(i));
		}

		System.out.println();

		names.remove(3);

		for (int i = 0; i < names.size(); i++) {
			System.out.println(names.get(i));
		}

		System.out.println();

		// names.removeRange(0, 1); // protected

		System.out.println(names);

		System.out.println();

		for (String i : names) { // enhanced for loop
			System.out.println("Enhanced For loop: " + i);
		}

		System.out.print("\n");
		Iterator individualItems = names.iterator();
		while (individualItems.hasNext()) {
			System.out.println("Interator: " + individualItems.next());
		}

		ArrayList nameCopy = new ArrayList();
		ArrayList nameBackup = new ArrayList();
		nameCopy.addAll(names); // copy all elements to an ArrayList

		String paulYoung = "Paul Ypoung";
		names.add(paulYoung); // add string to an ArrayList
		if (names.contains(paulYoung)) { // contains method
			System.out.println("Paul is here.");
		}

		if (names.containsAll(nameCopy)) { // containsAll method
			System.out.println("Everything is the same.");
		}

		if (nameCopy.containsAll(names)) {
			System.out.println("Everythin is the same, again."); // Paul Young
																	// is added
		}

		names.clear(); // clear method
		if (names.isEmpty()) { // isEmpty method
			System.out.println("ArrayList is empty.");
		}

		Object[] moreNames = new Object[4]; // generic Object data type
		moreNames = nameCopy.toArray(); // ArrayList --> Array
		System.out.println(Arrays.toString(moreNames)); //

	}
}
