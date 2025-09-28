/*
 * import: import classes to use
 */

import java.util.Scanner; //import the Scanner class: take user input
//import java.util.*; : import the whole java.util library

public class Java02 { // public: used by anyone; class: blueprint; Java02 =
						// class name
	// static: only a class can call the statement to execute; 
	// Scanner: to create a "Scanner class" object;
	// userInput: object name; new: ; Scanner: ; (System.in): input stream =
	// user's keyboard.
	static Scanner userInput = new Scanner(System.in);

	// The MAIN function, must exists in every program
	// void: not returning value after execution
	// (String[] args): a series of string to be accepted
	public static void main(String[] args) {

		// print; does not give a carret return after print to screen
		System.out.print("Your favorite number: ");

		/* **************************************************
		 * If Statement
		 ****************************************************/
		// if the condition in () is true, do {}
		// userInput: the object created as a class variable
		if (userInput.hasNextInt()) { // hasNextInt function: if the next
										// thing typed into the keyboard is an
										// integer
			int num = userInput.nextInt(); // receive userInput and
														// store in the int
														// variable
			System.out.println("You entered: " + num);
			// .hasNextDouble; .hasNextFloat; .hasNextByte; .hasNextBoolean
			// nextDouble; nextFloat; nextByte; nextChar; nextBoolean; nextLong,
			// nextShort
			
			System.out.println(num + " + " + num + " = " + num);
			int numMinusNum = num - num;
			System.out.println(num + " - " + num + " = " + numMinusNum);
			int numSquare = num * num;
			System.out.println(num + " * " + num + " = " + numSquare);
			int numDivideNum= num / num;
			System.out.println(num + " / " + num + " = " + numDivideNum);
			
			int numDivide2 = num / 2;
			System.out.println(num + " / " + " 2 = " + numDivide2);
			
			int numEnteredRemainder = num % 3; // % = Modulus 
			System.out.println(num + " % 3 = " + numEnteredRemainder);
			
			/* **************************************************
			 * Arithmetic Shorthands &  functions
			 ****************************************************/
			num += 2;
			System.out.println("num += 2 = " + num);
			num -= 2;
			System.out.println("num -= 2 = " + num);
			num *= 2;
			num /= 2;
			num %= 2;
			System.out.println("finally, num = " + num);
			
			num ++; // increment 
			num --; // decrement 
			
			Math.abs(num);
			int whichIsBigger = Math.max(5, 9);
			Math.min(5, 6);
			double numSqrt = Math.sqrt(whichIsBigger);
			System.out.println(numSqrt);
			
			Math.ceil(3.14159);
			Math.floor(3.14159);
			int numRound = (int) Math.round(7.666);
			System.out.println("numRound = " + numRound);
			int randomNum = (int) (Math.random()); // 0 ~ 0.9999999
			Math.random();
			Math.random();
			Math.random();

			System.out.println(randomNum);
			System.out.println("random number = " + randomNum);
			
			
		} else { // control flow; keep error from happening in this case.
			System.out.println("Please enter an integer next time!");
		}

	}
}
