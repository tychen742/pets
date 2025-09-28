package org.tychen.java.nestedtypes;

import org.tychen.java.instancevariables.InputHelper;

public class MathHelper {

//    public static final int ADD = 1000;
//    public static final int SUBTRACT = 1001;

    private int total;


    public int getTotal() {
        return total;
    }

    public MathHelper(int total) {
        this.total += total;
    }

//    public void setTotal(int total) {
//        this.total = total;
//    }


    public int doMath(String prompt, Operation operation) throws NumberFormatException {
        String input = InputHelper.getInput(prompt);
        int value = Integer.parseInt(input);

        switch (operation) {
            case ADD:
                total = total + value;
                break;
            case SUBTRACT:
                total = total - value;
                break;
        }
        return value;
    }

    // nested enum; a nested type of MathHelper class.
    public enum Operation {
        ADD, SUBTRACT, MULTIPLY, DIVIDE;
    }

}
