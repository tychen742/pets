// 09
package big_o_notation;

public class BigONotation {
	// Big O Notation: Scale, not speed
	// 45n^3 + 20n^2 + 19 = 84;
	// 45n^3 + 20n^2 + 19 = 459 (n = 1)
	// 45n^3 + 20n^2 + 19 = 47,019 (n = 10)
	// 45n^3 = 45,000
	// O(n^3)

	// O(1)
	// O(N)
	// O(N^2)
	// O(log N)
	// O(n log N)

	private int[] theArray;
	private int arraySize;
	private int itemsInArray = 0;
	static long startTime;
	static long endTime;

	public static void main(String[] args) {
		BigONotation testAlgo2 = new BigONotation(100000);
		testAlgo2.generateRandomArray();

		BigONotation testAlgo3 = new BigONotation(200000);
		testAlgo3.generateRandomArray();

		BigONotation testAlgo4 = new BigONotation(300000);
		testAlgo4.generateRandomArray();

		// testAlgo2.linearSearchForValue(20);
		// testAlgo2.bubbleSort();
		// testAlgo3.bubbleSort();
		// testAlgo2.binarySearchForValue(20);
		// testAlgo3.binarySearchForValue(20);

		startTime = System.currentTimeMillis();
		testAlgo4.quickSort(0, testAlgo2.itemsInArray);
		endTime = System.currentTimeMillis();
		System.out.println("Quick Sort took " + (endTime - startTime));
	}

	// O(1): Notation of Order of One. The algorithm will run for the same
	// amount of
	// time regardless the amount of data.
	public void addItemToArray(int newItem) {
		theArray[itemsInArray++] = newItem;
		// no matter how many data put into the array, the algorithm
		// perform the task at the same way.
	}

	// O(N): Order of N. Time it takes to complete is in direct proportion
	// to the amount of data.
	// Linear search has to look at each item in an array, so data amount
	// matters.
	// It's the same when we want to decide one match.
	public void linearSearchForValue(int value) {
		boolean valueInArray = false;
		String indexsWithValue = "";

		startTime = System.currentTimeMillis();

		for (int i = 0; i < arraySize; i++) {
			if (theArray[i] == value) {
				valueInArray = true;
				indexsWithValue += i + " ";
			}
		}
		System.out.println("Value found: " + valueInArray);
		endTime = System.currentTimeMillis();
		System.out.println("Linear Search took: " + (endTime - startTime));
	}

	public void binarySearchForValue(int value) {
		startTime = System.currentTimeMillis();

		int lowIndex = 0;
		int highIndex = arraySize - 1;
		int timesThrough = 0;

		while (lowIndex <= highIndex) {
			int middleIndex = (highIndex + lowIndex) / 2;
			if (theArray[middleIndex] < value) {
				highIndex = middleIndex + 1;
			} else if (theArray[middleIndex] > value) {
				highIndex = middleIndex - 1;
			} else {
				System.out.println("Found Match in index " + middleIndex);
				lowIndex = highIndex + 1;
			}
			timesThrough++;
		}

		endTime = System.currentTimeMillis();
		System.out.println("Binary Sort took " + (endTime - startTime));
		System.out.println("Times Through " + timesThrough);
	}

	public int partitionArray(int left, int right, int pivot) {

		int leftPointer = left - 1;
		int rightPointer = right;
		while (true) {
			while (theArray[++leftPointer] < pivot)
				;
			while (rightPointer > 0 && theArray[--rightPointer] > pivot)
				;
			if (leftPointer >= rightPointer) {
				break;
			} else {
				swapValues(leftPointer, rightPointer);
			}

		}
		swapValues(leftPointer, right);
		return leftPointer;
	}

	// O (N^2) very bad and to be avoided
	public void bubbleSort() {
		startTime = System.currentTimeMillis();
		for (int i = arraySize - 1; i > 1; i--) {
			for (int j = 0; j < i; j++) {
				if (theArray[j] > theArray[j + 1]) {
					swapValues(j, j + 1);
				}
			}
		}
		endTime = System.currentTimeMillis();
		System.out.println("Bubble Sort took " + (endTime - startTime));
	}

	// O(log N) log N N increasing data has little of no effect at some point
	// early on
	// data being used is decreased by half each time through the algorithm
	// binary search is a good example. However it requires bubble
	// bubble sort is inefficient

	// O(n log n)
	// O(N): to sort, we need to look at the element at least one time
	// O(N^2: bubble sort)
	// Quick Sort is efficient, why: Compare and move without shift.
	// Values are compared once.
	// Comparisons = log n!
	// Comparisons = log n + log (n-1) + ... + log (1)
	// Comparisons = n log n

	public void quickSort(int left, int right) {
		if (right - left <= 0) {
			return;
		} else {
			int pivot = theArray[right];
			int pivotLocation = partitionArray(left, right, pivot);
			quickSort(left, pivotLocation - 1);
			quickSort(pivotLocation + 1, right);
		}
	}

	BigONotation(int size) {
		arraySize = size;
		theArray = new int[size];
	}

	public void generateRandomArray() {
		for (int i = 0; i < arraySize; i++) {
			theArray[i] = (int) (Math.random() * 1000) + 10;
		}
		itemsInArray = arraySize - 1;
	}

	public void swapValues(int indexOne, int indexTwo) {
		int temp = theArray[indexOne];
		theArray[indexOne] = theArray[indexTwo];
		theArray[indexTwo] = temp;
	}
}
