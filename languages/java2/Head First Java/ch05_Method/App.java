package ch05_Method;

import java.util.Scanner;

public class App {

	static int numOfGuess = 0;
	static int numOfHit = 0;
	static int[] locations = new int[7];

	public static void main(String[] args) {
		// R	andomly generate the 3 positions
		int numStart = (int) (Math.random() * 5);
		locations[numStart] = numStart;
		locations[numStart + 1] = numStart + 1;
		locations[numStart + 2] = numStart + 2;
		System.out.println(numStart);

		// Loop (while?):
		while (numOfHit < 3) {

			Scanner input = new Scanner(System.in);
			System.out.println("Please guess: ");
			int guess = input.nextInt();
			numOfGuess++;

			if (guess == locations[numStart] | guess == locations[numStart + 1] | guess == locations[numStart + 2]) {
				System.out.println("Hit!");
				numOfHit++;
			} else {
				System.out.println("Miss!");
			}
		}
		System.out.println("Kill!");
		System.out.println("You hit " + numOfGuess + " times to kill!");
	}

}
