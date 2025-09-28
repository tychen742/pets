package org.tychen.java;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {

        // scan for value1
        Scanner scanner = new Scanner(System.in);

        System.out.print("Enter a numeric value: ");
//        double d1 = scanner.nextDouble();
        String input1 = scanner.nextLine();
        double d1 = Double.parseDouble(input1);


        // scan for value2
        System.out.print("Enter a numeric value: ");
//        double d2 = scanner.nextDouble();
        String input2 = scanner.nextLine();
        double d2 = Double.parseDouble(input2);

        // add up and print
        double sum = d1 + d2;
        System.out.println("The answer is " + sum);

    }
}
