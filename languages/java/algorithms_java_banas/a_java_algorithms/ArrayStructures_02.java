package a_java_algorithms;

public class ArrayStructures_02 {

	private int[] theArray = new int[50];
	private int arraySize = 10;

	public void generateRandomArray() {
		System.out.println("Generating array... ");
		for (int i = 0; i < arraySize; i++) {
			theArray[i] = (int) (Math.random() * 10 + 10);
		}
	}

	public void printArray() {
		System.out.println(" ---------------------------------------------------");
		for (int i = 0; i < arraySize; i++) {
			System.out.print(" |  " + i);
		}
		System.out.print(" |");
		System.out.println();
		for (int j = 0; j < arraySize; j++) {
			System.out.print(" | " + theArray[j]);
		}
		System.out.print(" |");
		System.out.println();
		System.out.println(" ---------------------------------------------------");

	}

	public int getValueAtIndex(int index) { // get a value by index
		if (index < arraySize) {
			return theArray[index];
		} else {
			return 0;
		}
	}

	public boolean doesArrayContainThisValue(int searchValue) {
		boolean valueInArray = false;
		for (int i = 0; i < arraySize; i++) {
			if (theArray[i] == searchValue) {
				valueInArray = true;
				// System.out.println("The searched value is " + searchValue);
			} else {
				valueInArray = false;
			}
		}
		return valueInArray;
	}

	public void deleteIndex(int index) {
		if (index < arraySize) {
			for (int i = index; i < (arraySize - 1); i++) {
				theArray[i] = theArray[i + 1];
			}
			arraySize--;
		}
		System.out.println("Value in index 3 deleted from array");
	}

	public void insertValue(int value) {
		theArray[arraySize] = value;
		arraySize++;
		System.out.println("Value 99 inserted at end of array");
	}

	public void linearSearch(int value) { // works better for finding all
											// matches
		boolean valueInArray = false;
		String indexsWithValue = "";
		for (int i = 0; i < arraySize; i++) {
			if (theArray[i] == value) {
				valueInArray = true;
				// System.out.println(value + "Linear Search: Value 11 found at
				// index " + i + ".");
				indexsWithValue += i + " ";
			}
			printHorzArray(i, -1);
		}
		// if (valueInArray == false)
		if (!valueInArray)
			System.out.println("Linear Search: Value 11 is not found in array.");
		else {
			System.out.println("The value 11 was found in the following: " + indexsWithValue);
		}
	}

	public void bubbleSort() {
		System.out.println("Starting Bubble Sort");
		for (int i = arraySize - 1; i > 1; i--) {
			for (int j = 0; j < i; j++) {
				if (theArray[j] > theArray[j + 1]) { // ascending order
					// if (theArray[j] < theArray[j + 1]) { // descending order
					swapValues(j, j + 1);
					printHorzArray(i, j);
				}
				// printHorzArray(i, j);
			}
		}
	}

	public void binarySearch(int value) { // problem finding the last value
		int lowIndex = 0;
		int highIndex = arraySize - 1;
		while (lowIndex < highIndex) {
			int middleIndex = (lowIndex + highIndex) / 2;
			if (theArray[middleIndex] < value) {
				lowIndex = middleIndex + 1;
			} else if (theArray[middleIndex] > value) {
				highIndex = middleIndex - 1;
			} else {
				System.out.println("Value " + value + " found at " + middleIndex);
				lowIndex = highIndex;
			}
			// else {
			// System.out.println("Value not found.");
			// }
			printHorzArray(middleIndex, -1);
		}
		if (lowIndex == value) {
			System.out.println(lowIndex);
		} else {
			System.out.println("Value not in array");
		}
	}

	public void selectionSort() {
		System.out.println("Start selectionSort");
		for (int i = 0; i < arraySize; i++) {
			int minimum = i;
			for (int j = i + 1; j < arraySize; j++) {
				if (theArray[minimum] > theArray[j]) {
					minimum = j;
				}
			}
			swapValues(i, minimum);
			printHorzArray(i, -1);
		}
	}

	public void insertionSort() {

		for (int i = 1; i < arraySize; i++) {
			int j = i;
			int toInsert = theArray[i];
			while ((j > 0) && (theArray[j - 1] > toInsert)) {
				theArray[j] = theArray[j - 1];
				j--;
			}
			theArray[j] = toInsert;
			printHorzArray(i, j);
			System.out.println("\nArray[i] = " + theArray[i] + " Array[j] = " + theArray[j] + " toInsert = " + toInsert);
		}
	}

	public void swapValues(int indexOne, int indexTwo) {
		int temp = theArray[indexOne];
		theArray[indexOne] = theArray[indexTwo];
		theArray[indexTwo] = temp;
	}

	public static void main(String[] args) {
		ArrayStructures_02 newArray = new ArrayStructures_02();
		newArray.generateRandomArray();
		// newArray.printArray();
		System.out.println("");

		// System.out.println("Value at index 3: " +
		// newArray.getValueAtIndex(3));
		// System.out.println("Is value 11 in array? " +
		// newArray.doesArrayContainThisValue(11));
		// System.out.println();
		//
		// newArray.deleteIndex(3);
		// newArray.printArray();
		// System.out.println();
		//
		// newArray.insertValue(99);
		// newArray.printArray();
		// System.out.println();
		//
		// newArray.linearSearch(11);
		// newArray.printArray();
		// System.out.println();

		// newArray.bubbleSort();
		// newArray.printArray();

		// newArray.binarySearch(19);

//		newArray.selectionSort();
		newArray.insertionSort();
	}

	public void printHorzArray(int i, int j) {
		for (int n = 0; n < 51; n++)
			System.out.print("-");
		System.out.println();
		for (int n = 0; n < arraySize; n++) {
			System.out.print("| " + n + "  ");
		}
		System.out.println("|");
		for (int n = 0; n < 51; n++)
			System.out.print("-");
		System.out.println();
		for (int n = 0; n < arraySize; n++) {
			System.out.print("| " + theArray[n] + " ");
		}
		System.out.println("|");
		for (int n = 0; n < 51; n++)
			System.out.print("-");
		System.out.println();
		// END OF FIRST PART
		// ADDED FOR BUBBLE SORT
		if (j != -1) {
			// ADD THE +2 TO FIX SPACING
			for (int k = 0; k < ((j * 5) + 2); k++)
				System.out.print(" ");
			System.out.print(j);
		}
		// THEN ADD THIS CODE
		if (i != -1) {
			// ADD THE -1 TO FIX SPACING
			for (int l = 0; l < (5 * (i - j) - 1); l++)
				System.out.print(" ");
			System.out.print(i);
		}
		System.out.println();
	}
}
