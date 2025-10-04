package org.tychen.java.references_vs_value_type;

import java.lang.reflect.Array;
import java.util.Arrays;
import java.util.Scanner;

public class MinimumElementChallenge {
    static Scanner scanner = new Scanner(System.in);


    private static int[] readIntegers(int count) {
        int[] array = new int[count];
        int i = 0;
        while (i < count) {
            System.out.print("Please enter a whole number: ");
            array[i] = scanner.nextInt();
            i++;
        }
        return array;
//        System.out.println(Arrays.toString(intArray));
    }

    private static int findMin(int[] array) {
//        int temp = array[0];
        int temp = Integer.MAX_VALUE;

        for (int i = 0; i < (array.length); i++) {

            int value = array[i];

            if (temp > value) {
                temp = value;
            }
        }
        return temp;
    }


    public static void main(String[] args) {
        System.out.println("Please enter a number: ");
        int count = scanner.nextInt();
        int[] intArray = new int[count];

        System.out.println(findMin(readIntegers(3)));
    }

}
