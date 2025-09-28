package org.tychen.java;

public class Main {

    public static void main(String[] args) {

        String str1 = "Hello";
        String str2 = "Hello";

        if (str1 == str2) {
            System.out.println("They match!");
        } else {
            System.out.println("They don't match!");
        }

        String str3 = "hello";
        if (str1 == str3) {
            System.out.println("They match!");
        } else {
            System.out.println("They don't match!");
        }

        String part1 = "Hello ";
        String part2 = "World";
        String str4 = part1 + part2;
        String str5 = "Hello World";
        if (str4 == str5) {         // object comparison, really
            System.out.println("They match!");
        } else {
            System.out.println("They don't match!");
        }

        if (str4.equals(str5)) {    // real string comparison with .equals
            System.out.println("They match!");
        } else {
            System.out.println("They don't match!");
        }

        String str6 = "hello world";
        if (str5.equalsIgnoreCase(str6)) {
            System.out.println("They match!");
        } else {
            System.out.println("They don't match!");
        }

    }
}
