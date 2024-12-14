// LinkedList is good for adding and deleting objects a lot
// Based on list, not array like ArrayList
import java.util.Arrays;
import java.util.LinkedList;

public class Java12_Collection_LinkedList {

	public static void main(String[] args) {

		LinkedList linkeListOne = new LinkedList(); // does not specify data
		LinkedList<String> names = new LinkedList<String>(); // specify data

		names.add("Ahmed Benani");
		names.add("Ali Syed");

		names.addLast("Nathan Martin"); // addLast
		names.addFirst("Joshua Smith"); // addFist

		names.add(0, "Noah Peters"); // add (Index, Element)

		names.set(2, "Paul Newman"); // set (Index, Element)

		names.remove(4);
		names.remove("Joshua Smith");

		for (String name : names) {
			System.out.println(name);
		}

		System.out.println("\nFirst Index: " + names.get(0));
		System.out.println("\nLast Index: " + names.getLast());

		LinkedList<String> nameCopy = new LinkedList<String>(names);
		System.out.println("\nnameCopy: " + nameCopy);

		if (names.contains("Noah Peters")) {
			System.out.println("\nNoah is here!");
		}

		if ((names.containsAll(nameCopy))) {
			System.out.println("\nCollections are the same.");
		}

		System.out.println("\nFirst Index: " + names.get(0));
		System.out.println("\nAli index at: " + names.indexOf("Ali Syed"));

		System.out.println("\nList Empty: " + names.isEmpty());

		System.out.println("\nHow many elements: " + names.size());

		System.out.println("\nLook w/o error: " + names.peek());

		System.out.println("\nRemove first element: " + nameCopy.poll());
		System.out.println("\nRemove first element: " + nameCopy.pollLast());

		System.out.println();

		nameCopy.push("Noah Peters");
		nameCopy.push("Noah Peters");
		for (String name : nameCopy) {
			System.out.println("pushed in Peters: " + name);
		}

		System.out.println();

		nameCopy.pop();
		for (String name : nameCopy) {
			System.out.println("Got rid of the first element: " + name);
		}

		Object[] nameArray = new Object[4];
		nameArray = names.toArray(); // turn LinkedList to Array
		System.out.println("\nthis is an array: " + Arrays.toString(nameArray));

		System.out.println();

		for (String name : names) {
			System.out.println("the names LinkedList: " + name);
			// System.out.println("\nLinkedList name is cleared: " + name);
		}

		names.clear();
		names.peek();
		names.poll();
		nameCopy.poll();

		for (String name : names) {
			// System.out.println("the names LinkedList: " + name);
			System.out.println("\nLinkedList name is cleared: " + name);
		}
	}
}
