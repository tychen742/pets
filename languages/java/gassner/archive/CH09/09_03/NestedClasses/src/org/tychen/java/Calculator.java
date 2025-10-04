package org.tychen.java;

import org.tychen.java.utilities.MathHelper;

import java.util.Scanner;

public class Calculator {

    public static void main(String[] args) {

        Calculator calc = new Calculator(); //
        calc.calculate();
    }

    protected void calculate() {  // static is class, now calculate is instance method
        // an instance method must be called from an instance class
        InputHelper helper = new InputHelper();
        String s1 = helper.getInput("Enter a numeric value: ");
        String s2 = helper.getInput("Enter a numeric value: ");
        String op = helper.getInput("Choose an operation (+ - * /): ");

        double result = 0;

        try {
            switch (op) {
                case "+":
                    result = MathHelper.addValues(s1, s2);
                    break;
                case "-":
                    result = MathHelper.subtractValues(s1, s2);
                    break;
                case "*":
                    result = MathHelper.multiplyValues(s1, s2);
                    break;
                case "/":
                    result = MathHelper.divideValues(s1, s2);
                    break;
                default:
                    System.out.println("Unrecognized operation!");
                    return;
            }
        } catch (Exception e) {
            System.out.println("Number format exception " + e.getMessage());
        }

        System.out.println("The result is: " + result);
    }

    class InputHelper {
        private String getInput(String prompt) {  // getInput is now an instance
            // method of the InputHelper class
            // this class is only available to the Calculator class
            System.out.print(prompt);
            Scanner scanner = new Scanner(System.in);
            return scanner.nextLine();
        }
    }

}
