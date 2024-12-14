package book.java7.chapter2;

import java.util.Scanner;
//import com.sun.java_cup.internal.runtime.Scanner;

public class GuessMyAge {

	public static void main(String[] args) {
		
		int answerOfAge = 18;
		Scanner scanner = new Scanner (System.in);
		System.out.println("Guess my age: ");
		
		do {
			System.out.println("Please enter a number");
			int guessOfAge = scanner.nextInt();
			if (guessOfAge == answerOfAge) {
				System.out.println("You got it right! ^^");
				break;
			} else if (guessOfAge > answerOfAge) {
				System.out.println("It's too big!");
			} else {
				System.out.println("It's too small!");
			}
		} while (true);
	}
}
