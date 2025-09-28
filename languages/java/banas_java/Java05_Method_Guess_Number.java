import java.util.Scanner;

public class Java05_Method_Guess_Number {
	static int randomNumber;
	static Scanner userInput = new Scanner(System.in);

	public static void main(String[] args) {

		System.out.println(getRandomNum()); // () method
		int guessResult = 0;
		int randomGuess = 0;

		while (guessResult != -1) { // need to be initialized
			System.out.println("Guess a nubmer between 1 and 5: ");
			randomGuess = userInput.nextInt();
			guessResult = checkGuess(randomGuess);
		}
		System.out.println("Yes the random number is " + randomGuess); // need
	}

	public static int getRandomNum() {
		randomNumber = (int) (Math.random() * 5 + 1);
		return randomNumber;
	}

	public static int checkGuess(int guess) {
		if (guess == randomNumber) {
			return -1;
		} else {
			return guess;
		}
	}
}
