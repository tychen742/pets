package org.tychen.java.instancevariables;

import java.util.Scanner;

public class InputHelper {

    public static String getInput(String prompt) {
        System.out.println(prompt);
        Scanner scanner = new Scanner(System.in);
        return scanner.nextLine();
    }

}
