// linear search: Looks at all indexies and is good for all matches (binary is good for one match)
package a_java_algorithms;

public class Linear_Search {

	static int[] theArray = new int[50];
	static int arraySize = 10;

	void generateRandomArray() {
		for (int i = 0; i < arraySize; i++) {
			theArray[i] = (int) ((Math.random() * 10) + 10);
		}
	}

	void printArray() {
		for (int i = 0; i < arraySize; i++) {
			System.out.print(i + " ");
			System.out.println(theArray[i]);
		}
	}

	int getValueAtindex(int index) {
		if (index < arraySize) {
			return theArray[index];
		} else {
			return 0;
		}
	}

	boolean doesArrayContainThisValue(int searchValue) {
		for (int i = 0; i < arraySize; i++) {
			if (theArray[i] == searchValue) {
				return true;
			}
			// else {
			// return false;
			// }
		}
		return false;
	}

	void deleteIndex(int index) {
		for (int i = 0; i < arraySize; i++) {
			if (i == index) {
				theArray[i] = theArray[i + 1];
				// theArray[i++];
			}
		}
		arraySize--;

	}

	void insertValue(int value) {
		theArray[arraySize] = value;
		arraySize++;
	}

	void linearSearch(int value) {
		for (int i = 0; i < arraySize; i++) {
			if (theArray[i] == value) {
				System.out.println("The value is at: " + i);
			} else {
				// System.out.println("The value is not found.");
			}
		}
	}

	public static void main(String[] args) {
		// generateRandomArray();
		// printArray();
		Linear_Search newArray = new Linear_Search();
		newArray.generateRandomArray();
		newArray.printArray();
		System.out.println("Value at 9: " + newArray.getValueAtindex(9));
		System.out.println("Has 18: " + newArray.doesArrayContainThisValue(18));
		// System.out.println("Delete 9th: " + newArray.deleteIndex(9));
		newArray.printArray();
		newArray.deleteIndex(6);
		newArray.printArray();

		newArray.insertValue(99);
		newArray.printArray();

		newArray.linearSearch(15);
	}
}
