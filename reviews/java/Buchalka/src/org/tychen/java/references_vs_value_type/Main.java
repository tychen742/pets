package org.tychen.java.references_vs_value_type;

import java.util.Arrays;

public class Main {

    public static void main(String[] args) {

        int myIntvalue = 10;
        int anotherIntValue = myIntvalue;

        System.out.println("myIntValue = " + myIntvalue);
        System.out.println("anotherIntValue = " + anotherIntValue);

        anotherIntValue++;

        System.out.println("myIntValue = " + myIntvalue);
        System.out.println("anotherIntValue = " + anotherIntValue);

        int[] myIntArray = new int[5];
        myIntArray[2] = 99;
        int[] anotherIntArray = myIntArray;

        System.out.println("myIntArray = " + Arrays.toString(myIntArray));
        System.out.println("anotherIntArray = " + Arrays.toString(anotherIntArray));

        anotherIntArray[0] = 11;

        System.out.println("after change: myIntArray = " + Arrays.toString(myIntArray));
        System.out.println("after change: anotherIntArray = " + Arrays.toString(anotherIntArray));
        // reference types represent the address of the object

        modifyArray(myIntArray);

        System.out.println("after modify: myIntArray = " + Arrays.toString(myIntArray));
        System.out.println("after modify: anotherIntArray = " + Arrays.toString(anotherIntArray));
    }

    private static void modifyArray(int[] array) {
        array[0] = 2;
        array = new int[] {1, 2, 3, 4, 5}; // dereferencing. does not change orginal arrays

    }


}
