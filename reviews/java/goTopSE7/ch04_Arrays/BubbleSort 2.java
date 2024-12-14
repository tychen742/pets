package ch04_Arrays;

import java.sql.Time;
import java.util.Date;

public class BubbleSort {

	public static void main(String[] args) {
		// int[] bubbleArray = new int[5];
		int[] bubbleArray = { 1, 55, 4, 6, 3, 8 };

		for (int element : bubbleArray)
			System.out.print(" " + element);

		System.out.println();
		// Bubble Sort

		System.out.println(System.currentTimeMillis());
		for (int i = bubbleArray.length - 2; i >= 0; i--) {
//		for (int i = 0; i < bubbleArray.length -2; i++) {
			for (int j = 0; j <= i; j++)
				if (bubbleArray[j] > bubbleArray[j + 1]) {
					int temp = bubbleArray[j + 1];
					bubbleArray[j + 1] = bubbleArray[j];
					bubbleArray[j] = temp;
				}
		}
		for (int element : bubbleArray) {
			System.out.print(" " + element);
		}
		System.out.println("\n"+System.currentTimeMillis());
	}

}
