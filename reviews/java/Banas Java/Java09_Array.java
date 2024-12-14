
// int array; copy array (part, range); sort array
// toString to print all array elements
// Arrays.fill 
// binary search
// array; loop to add/print values to/from array;
// enhanced for loop
import java.util.Arrays;

public class Java09_Array {
	// public Java09_Array() {
	// TODO Auto-generated constructor stub
	// }

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int[] randomArray; // one array, one data type;
							// fixed size and can't be changed
							// array is object
		int[] numberArray = new int[10]; // can't use until size defined
		randomArray = new int[20]; // size declared now.
		randomArray[1] = 2;

		// String[] stringArray = { "just", "random", "words" }; // declare
		// array

		// declare array using loop
		for (int i = 0; i < numberArray.length; i++) {
			// for (int i = 5; i < numberArray.length; i++) { // What would
			// happen?
			numberArray[i] = i;
		}

		int k = 1;
		while (k <= 41) {
			System.out.print('-');
			k++;
		}
		System.out.println();

		// print out an array/indexes using loop
		for (int j = 0; j < numberArray.length; j++) {
			// System.out.print("| " + j + " "); // indexes
			System.out.print("| " + numberArray[j] + " "); // content of array
		}
		System.out.println('|');

		// use enhanced for loop
		for (int row : numberArray) { // row: a placeholder for the values
			// System.out.println(row);
			// System.out.print(row);
			System.out.print("| " + row + " ");
		}
		System.out.println('|');

		// copy array; copy part of an array
		// copyOf method
		int[] numberCopy = Arrays.copyOf(numberArray, 5);
		for (int row : numberCopy) {
			System.out.print("| " + row + " ");
		}
		System.out.println("|");

		// copyOfRange method, print elements in between?????
		int[] copyArrRange = Arrays.copyOfRange(numberArray, 0, 10);
		for (int row : copyArrRange) {
			System.out.print("| " + row + " ");
		}
		System.out.println("|");

		System.out.println(Arrays.toString(numberCopy)); // toString
		System.out.println(Arrays.toString(copyArrRange));

		int[] moreNumbers = new int[100];
		Arrays.fill(moreNumbers, 2); // 2 is now the default value
		System.out.println(Arrays.toString(moreNumbers));

		// sort an array
		int[] numsToSort = new int[10];
		for (int i = 0; i < numsToSort.length; i++) {
			numsToSort[i] = (int) (Math.random() * 100);
		}
		System.out.println(Arrays.toString(numsToSort));
		Arrays.sort(numsToSort);
		System.out.println(Arrays.toString(numsToSort));

		// binary search
		int whereIs50 = Arrays.binarySearch(numsToSort, 50);
		System.out.println(whereIs50);
	}

}
