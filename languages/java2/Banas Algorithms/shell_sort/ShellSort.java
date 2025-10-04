// 07
package shell_sort;

import java.util.Arrays;

public class ShellSort {

	public void sort() {
		int inner, outer, temp;
		int interval = 1;
		while (interval <= arraySize / 3) {
			// Define an interval sequence 
			interval = interval * 3 + 1;
			
			// Keep plooing until the interval is 1
			// Then this becomes an insertion sort
			// while () {
			//
			// for () {
			//
			// while () {
			//
			// }
			// }
			// }
		}
	}

	public static void main(String[] args) {

		ShellSort theSort = new ShellSort();
		System.out.println(Arrays.toString(theSort.theArray));

	}

	private int[] theArray;
	private int arraySize;

	ShellSort() {
		this.arraySize = arraySize;
		theArray = new int[arraySize];
		generateRandomArray();
	}

	public void generateRandomArray() {

	}

	public void printHorzArray () {

	}
}
