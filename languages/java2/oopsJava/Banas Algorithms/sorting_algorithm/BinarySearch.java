package sorting_algorithm;

public class BinarySearch {

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

	// swap elements
	static void swapElements(int m, int n) {
		if (m > n) {
			int temp = m;
			m = n;
			n = temp;
		}
	}

	// bubble sort
	static void bubbleSort(int[] array) {
		for (int i = 0; i < randArray.length; i++) {
			for (int j = 0; j < randArray.length; j++) {
				// swapElements(randArray[i], randArray[j]);
				if (randArray[i] < randArray[j]) {
					int temp = randArray[i];
					randArray[i] = randArray[j];
					randArray[j] = temp;
				}
			}
		}
	}

	// binary search
	private static void binarySearch(int value, int[] array) {
		int low = 0;
		int high = randArray.length - 1;
		while (low <= high) {
			int middle = (int) ((low + high) / 2);
			if (value > randArray[middle]) {
				low = middle + 1;
			} else if (value < randArray[middle]) {
				high = middle - 1;
			} else {
				if (randArray[middle] != value) {
					System.out.println("No key found.");
					low = high + 1;
				} else {
					System.out.println("Key is at " + middle);
					low = high + 1;
				}
			}
		}

	}

	public static void main(String[] args) {
		generateArray(10);
		printArray(randArray);
		bubbleSort(randArray);
		System.out.println();
		printArray(randArray);
		System.out.println();
		binarySearch(14, randArray);
	}
}
