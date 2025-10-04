package org.tychen.java.codingexercises;

public class FirstLastDigitSum {

    public static void main(String[] args) {
        int sum = sumFirstAndLastDigit(5);
        System.out.println("sum: " + sum);
    }

    public static int sumFirstAndLastDigit(int number) {
        if (number < 0) {
            return -1;
        } else {
            int firstDigit = 0;
            int lastDigit = number % 10;
//            System.out.println("last digit:" + lastDigit);

            if (number < 10) {
                return number * 2;
            } else {

                while ((number / 10) > 0) {
                    number = number / 10;
//                    System.out.println(number);
                    if (number / 10 < 1) {
                        firstDigit = number;
                    }
                }
//                System.out.println("first digit: " + firstDigit);

                return (lastDigit + firstDigit);
            }
        }
    }

}
