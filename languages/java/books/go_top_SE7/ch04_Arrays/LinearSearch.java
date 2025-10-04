package ch04_Arrays;

import java.util.Arrays;
import java.util.Scanner;

public class LinearSearch {

	public static void main(String[] args) {

		int[] array = new int[10];
		for (int i = 0; i < 10; i++) {
			array[i] = (int) (Math.random() * 10 + 1);
		}
		for (int element : array) {
			System.out.print(element + " ");
		}
		System.out.println();

		// sort
		Arrays.sort(array);
		System.out.println();
		for (int element : array) {
			System.out.print(element + " ");
		}
		System.out.println();

		// binarySearch
		int randNum = (int) ((Math.random() * 10) + 1);
		int position = Arrays.binarySearch(array, randNum);
		System.out.printf("the number %d is at position %d %n", randNum, position);

		Scanner scanner = new Scanner(System.in);
		System.out.print("Please enter an integer between 1 and 10: ");
		int input = scanner.nextInt();

		int j = 0;
		int number = -1;
		for (j = 0; j < array.length; j++) {
			if (array[j] == input) {
				number = j;
				break;
			}
		}
		if (number == -1) {
			System.out.println("The number " + input + " is not in the array.");
		} else {
			System.out.println("The number " + input + " is at position " + number);
		}
		scanner.close();
	}

}
