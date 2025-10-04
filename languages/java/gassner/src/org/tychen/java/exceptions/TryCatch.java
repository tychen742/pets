package org.tychen.java.exceptions;

public class TryCatch

{
    public static void main(String[] args) {

        try {
            String welcome = "Welcome!";
            char[] chars = welcome.toCharArray();
            char lastChar = chars[chars.length - 1]; // will jump to catch
            System.out.println("Last char: " + lastChar); // this will not run

            String nothing = null;
            System.out.println(nothing.length());

        } catch (ArrayIndexOutOfBoundsException e) {  // Exceptions: super class
            e.printStackTrace();
//            return; // will not see the final statement: Structured Exceptions Handling
        }
        System.out.println("Code ran successfully.");
    }
}
