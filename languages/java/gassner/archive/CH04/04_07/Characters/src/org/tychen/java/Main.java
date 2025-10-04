package org.tychen.java;

public class Main {

    public static void main(String[] args) {

        char c1 = '1'; // "" for strings
        char c2 = 'A';
        char c3 = 'a';
        char c4 = ';';
        char c5 = '/';
//        String c6 = new String("\");
        System.out.println("Char 1: " + c1);
        System.out.println("Char 2: " + c2);
        System.out.println("Char 3: " + c3);
        System.out.println("Char 4: " + c4);

        char dollarSign = '\u0024'; // uniCode
        System.out.println("Label of Currency: " + dollarSign);

        char a1 = 'a';
        char a2 = 'b';
        char a3 = 'c';
        System.out.print(Character.toUpperCase(a1));
        System.out.print(Character.toUpperCase(a2));
        System.out.println(Character.toUpperCase(a3));

        char[] charTest = {'H', 'e', 'l', 'l', 'o', '!'};
        String s = new String(charTest); // pass charTest argument to the constructor method of String
        System.out.println(s);
    }
}