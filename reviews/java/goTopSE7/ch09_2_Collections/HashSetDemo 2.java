package ch09_2_Collections;

import java.util.HashSet;
import java.util.Scanner;

public class HashSetDemo {

	public static void main(String[] args) {

		HashSet<Integer> hset = new HashSet<>();

		int order = 1;
		int num;

		Scanner scanner = new Scanner(System.in);
		System.out.println("Please enter an integer between 1 and 49: \n");

		while (order <= 6) {
			System.out.print("The " + order + " number is: ");

			try {
				num = Integer.parseInt(scanner.nextLine());
			} catch (NumberFormatException ex) {
				System.out.println("Please enter an integer.");
				continue;
			}

			if (num >= 1 && num <= 49) {
				if (hset.add(num)) {
					order++;
				} else {
					System.out.println("Repetitive number. ");
				}
			} else {
				System.out.println("The number is out of range.");
			}

		}
		System.out.println("\nThe numbers are: " + hset);
	}

}
