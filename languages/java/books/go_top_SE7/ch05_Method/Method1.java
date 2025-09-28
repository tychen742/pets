package ch05_Method;

import java.util.Scanner;

public class Method1 {

//	static int number1;
//	static int number2;
//	static int sum = 0;

	public static void main(String[] args) {

		/*
		 * Scanner scanner = new Scanner(System.in); System.out.println(
		 * "Please enter a number range to be added: "); number1 =
		 * scanner.nextInt(); number2 = scanner.nextInt();
		 * 
		 * // System.out.println(number1); // System.out.println(number2);
		 */
		total(1, 10);
		total(5, 12);
		// scanner.close();
	}

	static void total(int number1, int number2) {
		int sum = 0;
		for (int i = number1; i <= number2; i++) {
			sum = sum + i;
		}
		System.out.println(sum);
	}

}
