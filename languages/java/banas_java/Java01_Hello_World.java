// Basic concepts: What and how
// Procedure vs problem-solving
// repeating
// ===== Overall + Variables + Primitive Data Types + Strings =====
// Everything is class/object
// public: this class is available to all other classes and the contained info
// class: a blueprint for the program 
// 

public class Java01_Hello_World {
	/* *************************************
	 *  Variables
	 *****************************************/
	// a variable is a storage area for data
	// a class variable that is accessible to other method or function created in this class
	// static: allow other classes to access
	// randomString: the name of the class variable; 
	// variable names are case-sensitive: letter, number, _, $
	static String randomString = "String to print" ;
	
	// create a class that's going to remain the same
	// final: constant
	// double: number with decimal places
	// constant: use UPPER case variable name
	static final double PINUM = 3.14159;

	// main function: needed in every Java program and executes first
	// static: only a class can call this function to execute
	// void: don't return anything after execution
	// main: the name of the function
	// String[]: every main function must accept an array of string object
	 public static void main(String[] args) {
		
		// println: the print line function
		System.out.println("Hello World");
		System.out.println(randomString);
		System.out.println(PINUM);
		
		int integerTwo = 5; //declaration with assignment
		int integerFive = integerTwo + 7; // expression statement <--> declaration statement
		// Java sees the semiconon only
		int integerSix = 
				integerFive - 
				10;
		System.out.println(integerSix);
		
	
		/* *************************************
		 *  Primitive Data Types 
		 *****************************************/
		System.out.println();
		System.out.println("Primitive Types:");
		byte aByte = 127;
		System.out.println("Max value of Byte: " + Byte.MAX_VALUE);
		System.out.println("Max value of Short: " + Short.MAX_VALUE);
		System.out.println("Max value of Integer: " + Integer.MAX_VALUE);
		System.out.println("Max value of Long: " + Long.MAX_VALUE);
		System.out.println("Max value of Float: " + Float.MAX_VALUE);
		System.out.println("Max value of Double: " + Double.MAX_VALUE);
		// Float: 3.4028235E38; E = exponent; Float is precise to roughly 6 decimal places
	
		boolean trueOrFalse = true; // holds either true or false; lower case
		System.out.println(trueOrFalse);
		
		char aChar = 65;
		char anotherChar = 66;
		char oneMoreChar = 'A'; // use ', not "
		System.out.println(aChar);
		System.out.println(anotherChar);
		System.out.println(oneMoreChar);
		
		
		/* *************************************
		 *  Strings
		 *****************************************/
		// a string is an object
		String aString = "I am a string";
		String bString = " and I am right here.";
		String cString = aString + bString; // assign combined strings
		System.out.println(aString + bString); // combine string
		System.out.println(aString + " to stay" + bString); // add string
		System.out.println(cString);
		
		/* ************************************* 
		 * turn primitive data types into string types
		*****************************************/
		String byteString = Byte.toString(aByte); // toString is a function
		Short.toString(aByte); 
		String integerString = Integer.toString(aByte); 
		Long.toString(aByte); 
		Float.toString(aByte); 
		Double.toString(aByte); 
		Boolean.toString(trueOrFalse);
		
		System.out.println(byteString);
		System.out.println(aByte + 1);
		System.out.println(aByte - 1);
		System.out.println(byteString + 1); // byteString is a string
		//System.out.println(byteString - 111);
	 
		/* ************************************* 
		 * Casting Primitive Data Types, & String
		*****************************************/
		double anotherDouble = 12.3456;
		int doubleToInt = (int) anotherDouble;
		System.out.println(doubleToInt);
		
		double thirdDouble = 9999999999999999999999.9;
		int fourthDouble = (int) thirdDouble;
		System.out.println(fourthDouble); // only print the max value of int
		// can cast Byte, Short, Integer, Long, Double
		// can't cast Float, Boolean, and Char
		// ??? String integerString = "1234" ;
		// turn String into other primitive data types
		int stringToInt = Integer.parseInt(integerString);
		short stringToShort = Short.parseShort(integerString);
		long stringToLong = Long.parseLong(integerString, 10);
		Byte.parseByte(integerString);
		Float.parseFloat(integerString);
		Double.parseDouble(integerString);
		boolean stringToBoolean = Boolean.parseBoolean(integerString);
		// no reason parsing a character

		System.out.println("stringToInt = " + stringToInt);
		System.out.println("stringToInt + 1 = " + (stringToInt + 1));
		System.out.println("stringToShort + 1 = " + (stringToShort + 1));
		System.out.println("stringToLong - 1.1 = " + (stringToLong - 1.1));
		System.out.println("stringToBoolean = " + stringToBoolean);
	 }
}
