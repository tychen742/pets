package us.tychen;

import java.awt.datatransfer.StringSelection;

public class TypeInference {

	public static void main(String[] args) {
		StringLengthLambda myLambda = (String s) -> s.length();
		System.out.println("How long? " + myLambda.getLength("How long is this string?"));
		
	}

	interface StringLengthLambda {
		int getLength(String s);
	}
}
