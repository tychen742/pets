package sorting_algorithm;

public class LinearSearch {
	// randomly generate an array
	static int[] randArray;

	private static void generateArray(int length) {
		randArray = new int[length];
		for (int i = 0; i < randArray.length; i++) {
			randArray[i] = (int) (Math.random() * 10 + 10);
		}
		return;
	}

	// print an array
	private static void printArray(int[] array) {
		for (int element : array) {
			System.out.print(element + " ");
		}
	}

	// linear search
	static void linearSearch(int value) {
		boolean available = false;
		for (int i = 0; i < randArray.length; i++) {
			if (randArray[i] == value) {
				System.out.println(value + " is at position " + i);
				available = true;
			}
		}
		if (available == false) {

			System.out.println("Value" + value
					+ " is not available in this array");
		}
	}

	public static void main(String[] args) {
		generateArray(10);
		printArray(randArray);
		System.out.println();
		linearSearch(15);
	}

}
