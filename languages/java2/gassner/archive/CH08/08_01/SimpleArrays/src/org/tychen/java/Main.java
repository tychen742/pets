package org.tychen.java;

import java.util.Arrays;

public class Main {

    public static void main(String[] args) {

        System.out.println("Array of primitives");
        int[] ints = {9, 6, 19}; // arrays are not resizable but element can be updated
        Arrays.sort(ints);
        for (int i = 0; i < ints.length; i++) {
            System.out.println(ints[i]);
        }

        System.out.println("Array of strings");
        String[] strings = {"red", "green", "blue"};
        Arrays.sort(strings);
        for (String string : strings) {
            System.out.println(string);
        }

        System.out.println("Setting an initial size");
        int[] sized = new int[10];
        for (int value : sized) {
            System.out.println(value);
        }
        for (int i = 0; i < sized.length; i++) {
            sized[i] = i * 100;
            System.out.println(sized[i]);
        }

        System.out.println("Copying an array");
        int[] copied = new int[5];
        System.arraycopy(sized, 5, copied, 0, 5);
        for (int copy: copied) {
            System.out.println(copy);
        }
        for (int i = 0; i < 5; i++) {
            System.out.println(copied[i]);
        }
    }
}
