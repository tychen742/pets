// one data type; fixed size can't be changed; an object;
// enhanced For Loop (For Each) 
// Arrays.copy, copyOfRange, sort, binarySearch

package java09_Arrays;

import java.util.Arrays;

public class Lesson09 {
	public static void main(String[] args) {

		int[] randomArray;
		int[] numberArray = new int[10];
		randomArray = new int[20];
		randomArray[0] = 20;

		for (int i = 0; i < numberArray.length; i++) {

			numberArray[i] = i;
		}

		// ------ using While Loop
		int k = 1;
		while (k <= 41) {
			System.out.print('-');
			k++;
		}
		System.out.println();
		DrawLine.Break();

		for (int j = 0; j < numberArray.length; j++) {
			System.out.print("| " + j + " ");
		}

		DrawLine.Break();

		// Multidimensional Array
		String[][] multiArray = new String[10][10];

		for (int i = 0; i < multiArray.length; i++) {
			for (int j = 0; j < multiArray[i].length; j++) {
				multiArray[i][j] = i + " " + j;
			}
		}

		new DrawLine(61, '-');
		DrawLine.Break();

		for (int i = 0; i < multiArray.length; i++) {
			for (int j = 0; j < multiArray[i].length; j++) {
				System.out.print("| " + i + " " + j + " ");
			}
			System.out.println("|");
		}

		new DrawLine(61, '-');

		DrawLine.Break();

		// regular For Loop
		for (int i = 0; i < numberArray.length; i++) {
			System.out.print(i);
		}

		DrawLine.Break();

		// Enhanced For Loop
		for (int element : numberArray) {
			System.out.print(element);
		}

		DrawLine.Break();
		new DrawLine(61, '-');

		System.out.println();

		// Enhanced For Loop for multidimensional array
		for (String[] row : multiArray) {
			for (String column : row) {
				System.out.print("| " + column + " ");
			}
			System.out.println("|");
		}

		new DrawLine(61, '-');

		// System.out.println();
		DrawLine.Break();

		// copy arrays
		int[] numberArrayCopy1 = Arrays.copyOf(numberArray, 5);

		int[] numberArrayCopy2 = Arrays.copyOf(numberArray, 20);
		for (int i = 0; i < numberArrayCopy2.length; i++) {
			System.out.print(numberArrayCopy2[i] + " ");
		}
		
		// copy part of an array
		int[] numberArrayCopy3 = Arrays.copyOfRange(numberArray, 0, 5);
		
		DrawLine.Break();
		
		// print an array
		System.out.println(Arrays.toString(numberArrayCopy2));
		System.out.println(Arrays.toString(numberArrayCopy3));
	
		// fill in values
		int[] moreNumbers = new int[15];
		Arrays.fill(moreNumbers, 2);
		System.out.println(Arrays.toString(moreNumbers));
		
		char[][] gameBoard = new char[10][10];
		for (char[] row : gameBoard) {
			Arrays.fill(row, '*');
		}
		for (char[] row : gameBoard) {
			System.out.println(row);
		}
		
		int[] numToSort = new int[10];
		for (int i = 0; i < 10; i++) {
			numToSort[i] = (int) (Math.random()* 100 + 1);
		}
		System.out.println(Arrays.toString(numToSort));
		
		// Arrays.sort
		Arrays.sort(numToSort);
		System.out.println(Arrays.toString(numToSort));
		
		// Binary Search
		int whereIs50 = Arrays.binarySearch(numToSort, 50);
		System.out.println(whereIs50);
	}

}
