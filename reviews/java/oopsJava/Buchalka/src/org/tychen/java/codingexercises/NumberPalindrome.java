package org.tychen.java.codingexercises;

public class NumberPalindrome {

    public static void main(String[] args) {

        boolean palin = isPalindrome(11);
        System.out.println(palin);
    }

    public static boolean isPalindrome(int number) {
        int original = number;
        if (number < 0) {
            number = Math.abs(number);
        }
        int reverse = 0;
        while (number > 0) {
            int lastDigit = number % 10;
            reverse = (reverse * 10) + lastDigit;
            number = number / 10;
//            System.out.println(number);
        }
//        System.out.println(reverse);

        if (original < 0) {
            original = Math.abs(original);
            return original == reverse;
        } else {
            return original == reverse;
        }
    }

}

