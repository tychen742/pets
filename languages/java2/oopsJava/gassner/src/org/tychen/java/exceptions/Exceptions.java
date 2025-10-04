package org.tychen.java.exceptions;

public class Exceptions {

    public static void main(String[] args) {
        String welcome = "Welcome!";
        char[] chars = welcome.toCharArray();
        char lastChar = chars[chars.length -1 ];
//        char lastChar = chars[chars.length ];  // whill induce out of bound error
        System.out.println("Last char: " + lastChar);

        String nothing = null;
        System.out.println(nothing);
        System.out.println("String length: " + nothing.length()); // NullPointerException

    }

}
