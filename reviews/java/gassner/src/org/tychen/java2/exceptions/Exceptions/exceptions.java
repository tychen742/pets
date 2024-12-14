package org.tychen.java2.exceptions.Exceptions;
// syntax compile time, exception runtime
public class exceptions {

    public static void main(String[] args) {
        System.out.println("Hello world");
        int x = 1;
//        String x = "Hello";
        String y = "Hello";

//        String welcome = "Welcome!";
//        char [] chars = welcome.toCharArray();
//        char lastChar = chars[chars.length]; // ArrayIndexOutOfBound
//        System.out.println("last char: " + lastChar);

        String nothing = null;
        System.out.println(nothing);
        System.out.println("string length = " + nothing.length()); // NullPointer
    }

}
