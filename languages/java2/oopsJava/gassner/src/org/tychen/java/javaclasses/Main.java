package org.tychen.java.javaclasses;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
    // static: method can be called w/o creating class instances
        // static method vs. instance method (can only be called from class obj)
        String input = getInput("Enter value 1: ");
        System.out.println("You entered: " + input);
        input = getInput("Enter value 2: ");
        System.out.println("You entered: " + input);
    }

    private static String getInput(String prompt) {
        // private: can be called only from this class
        // static: can be called from the main method
        // String: will return a string
        System.out.print(prompt);
        Scanner scanner = new Scanner(System.in); // system.in input stream class
        return scanner.nextLine();
    }

}
