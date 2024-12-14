package org.tychen.java.listandarraylist;

import java.util.Scanner;

public class ListAndArrayList {
    private static Scanner s = new Scanner(System.in);
    private static int[] baseData = new int[10];

    public static void main(String[] args) {
        System.out.println("Enter 10 integers: ");
        getInput();
        printArray(baseData);
        resizeArray();
        System.out.println("Enter 12 integers:");
        getInput();
        printArray(baseData);
    }

    public static void getInput() {
        for (int i = 0; i < 10; i++)
            baseData[i] = s.nextInt();
    }

    public static void printArray(int[] arr) {
        for (int i = 0; i < arr.length; i++) {
            System.out.print(arr[i] + " ");
        }
    }

    public static void resizeArray() {
        int[] orginal = baseData;
        baseData = new int[12];
        for (int i = 0; i < orginal.length; i++) {
            baseData[i] = orginal[i];
        }
    }

}
