package sorting_algorithm;

public class BubbleSort {

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
				System.out.print(randArray[i] + " ");
				System.out.println(randArray[j]);
				if (randArray[i] > randArray[j]) {
					int temp = randArray[i];
					randArray[i] = randArray[j];
					randArray[j] = temp;
					printArray(array);
					System.out.println();
					printArray(array);
					System.out.println();
				}
			}

		}
	}

	public static void main(String[] args) {
		generateArray(10);
		printArray(randArray);
		System.out.println();
		printArray(randArray);
		System.out.println();
		bubbleSort(randArray);

	}
}
