import java.util.Arrays;

public class Java13_String {
	public static void main(String[] args) {
		String randomstring = "I am just a random string."; // "", not ''
		String howToQuote = "He said, \"I'm here.\"";
		/*
		\n
		\b
		\''
		\""
		\\
		*/
		
		System.out.println(randomstring);
		System.out.println(randomstring + " " + howToQuote);
		
		int numberTwo = 2;
		System.out.println();
		System.out.println(randomstring + " " + numberTwo);
		
		String upperCaseString = "UPPER CASE";
		String lowerCaseString = "upper case";
		if (upperCaseString.equals(lowerCaseString) ) { // equals method is case-sensitive
			System.out.println("They are equal.");
		}
		if (upperCaseString.equalsIgnoreCase(lowerCaseString) ) { // equalsIgnoreCase method
			System.out.println("\nThey are equal if case is ignored.");
		}
		
		String letters = "abcd ddasdlkfa;lb ";
		String moreLetters = "abc";
		
		System.out.println("2nd character: " + letters.charAt(1));
		System.out.println("Compare Strings: " + moreLetters.compareTo(letters));

		System.out.println("\nletters contains \"abc\": " + letters.contains("abc"));
		System.out.println("letters ends with \'b\': " + letters.endsWith("b"));
		System.out.println("index of \"abc\": " + letters.indexOf("cd"));
		System.out.println("Length: " + letters.length());
		System.out.println("Replace: " + letters.replace("abc", "ggggg"));
	
		String [] letterArray = letters.split("");
		System.out.println(Arrays.toString(letterArray));
		
		char[] charArray = letters.toCharArray();
		System.out.println(Arrays.toString(charArray));
		
		System.out.println(letters.substring(1, 4));
		System.out.println(letters.toUpperCase());
		System.out.println(letters.trim()); // trim white space before/after
		
		// a String is immutable, so is memory consuming
		StringBuilder aStringBuilder = new StringBuilder("Some string built by StringBuilder.");
		System.out.println(aStringBuilder);
		System.out.println(aStringBuilder.append(".. again!")); // changes the string!!
		System.out.println(aStringBuilder);
		System.out.println("Memory (character) used: " + aStringBuilder.capacity());
		aStringBuilder.ensureCapacity(100);
		System.out.println("Memory (character) used: " + aStringBuilder.capacity());
		System.out.println("Length of string: " + aStringBuilder.length());
		aStringBuilder.trimToSize();
		System.out.println("Memory (character) used: " + aStringBuilder.capacity());
		
		System.out.println("Insert to index: " + aStringBuilder.insert(4, "thing"));
		
		String aString = aStringBuilder.toString();
		/*charAt()
		indexOf()
		lastIndexOf()
		subString()*/
		
	}
}
