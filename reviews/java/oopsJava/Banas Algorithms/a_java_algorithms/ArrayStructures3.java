package a_java_algorithms;

public class ArrayStructures3 {

	// declare the array
	int[] theArray = new int[10];
	int arrayLength = 10;

	// generate the random array
	void generateArray() {
		for (int i = 0; i < 10; i++) {
			theArray[i] = (int) (Math.random() * 20 + 1);
		}
	}

	// print the array
	void printArray() {
		for (int i = 0; i < arrayLength; i++) {
			System.out.print(i + ":" + theArray[i] + "; ");
		}
	}

	// search the array
	void SearchArray(int num) {
		for (int i = 0; i < arrayLength; i++) {
			if (theArray[i] == num) {
				System.out.println("The number " + num + " is on index " + i);
			}
		}
	}

	// delete an element
	void deleteArrayElement(int index) {
		if (index < arrayLength) {
			for (int i = index; i <(arrayLength-1); i++) {
				theArray[i] = theArray[i+1];
			}
		}
		--arrayLength;
	}
	
	void insertValue(int value) {
	}

	public static void main(String[] args) {
		ArrayStructures3 newArray = new ArrayStructures3();
		newArray.generateArray();
		newArray.printArray();
		// newArray.SearchArray(10);
		System.out.println();
		newArray.deleteArrayElement(0);
		newArray.printArray();

	}
}