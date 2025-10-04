package org.tychen.java;

import java.util.Scanner;


public class Main {

    public static void main(String[] args) {

        Scanner sc = new Scanner(System.in);
        System.out.print("Enter a numeric value: ");
//        double d1 = sc.nextDouble();

        String input1 = null;
        double d1 = 0;

        try {
            input1 = sc.nextLine();
            d1 = Double.parseDouble(input1);
        } catch (Exception e) {
            System.out.println("Something's wrong with d1: " + e.getMessage());
        }
        System.out.print("Enter a numeric value: ");
//        double d2 = sc.nextDouble();
        double d2 = 0;
        try {
            String input2 = sc.nextLine();
            d2 = Double.parseDouble(input2);
        } catch (Exception e) {
            System.out.println("Something's wrong with d2: " + e.getMessage());
        }
        System.out.print("Choose an operation (+ - * /): ");
        // assign to string
        String op = "";
        try {
            op = sc.nextLine();
        } catch (Exception e) {
            System.out.println("Something's wrong with the operator: " + e.getMessage());
        }

        // arithmetic operation
        operation(d1, d2, op);
    }

    static void calc() {


    }

    // method overloading
    static void operation(double d1, double d2, String op) {
        double result = 0;
        /*if (op.equals("+")) {
            result = d1 + d2;
        } else if (op.equals("-")) {
            result = d1 - d2;
        } else if (op.equals("*")) {
            result = d1 * d2;
        } else if (op.equals("/")) {
            result = d1 / d2;
        } else {
            System.out.println("Please input a correct operator.");
        }*/
//        return result;

        switch (op) {
            case "+":
                result = addition(d1, d2);
                break;
            case "-":
                result = subtraction(d1, d2);
            case "*":
                result = multiplication(d1, d2);
                break;
            case "/":
                result = division(d1, d2);
                break;
            default:
                System.out.println("Operator incorrect. Exiting...");
                return;
        }

        System.out.println("The result is: " + result);
    }

    static double addition(double d1, double d2) {
        return (d1 + d2);
    }

    static double subtraction(double d1, double d2) {
        return (d1 - d2);
    }

    static double multiplication(double d1, double d2) {
        return (d1 * d2);
    }

    static double division(double d1, double d2) {
        return (d1 / d2);
    }

}
