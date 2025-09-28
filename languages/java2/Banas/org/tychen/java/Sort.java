package org.tychen.java;

import java.util.Arrays;


public class Sort extends ArrayStructures {

    // Linear Search
    public static String linearSearch(int[] theArray, int value) {
        boolean valueInArray = false;
        String indexesWithValue = "";
        int arraySize = theArray.length;
        for (int i = 0; i < arraySize; i++) {
            if (theArray[i] == value) {
                valueInArray = true;
                indexesWithValue = indexesWithValue + i + " ";
            }
        }
        if (valueInArray == false) {
            indexesWithValue = "None";
        }
        return "Index(es) with value " + value + ": " + indexesWithValue;
    }

    // Bubble Sort
    public int[] bubbleSort(int[] thisArray) {
        int arraySize = thisArray.length;
        for (int i = 0; i < arraySize; i++) {
            for (int j = 0; j < (arraySize - 1); j++) {
//                System.out.println("i, j : " + i + ", " + j);
//                if ((j + 1) < arraySize) {
                if (thisArray[j] < thisArray[j + 1]) {
                    swapValues(thisArray, j, (j + 1));
                }
//                }
            }
        }
        printArraySimple(thisArray);
        return thisArray;
    }

    int count = 0;

    public void swapValues(int[] thisArray, int index1, int index2) {
//        System.out.print(++count + "  ");

        int temp = thisArray[index1];
        thisArray[index1] = thisArray[index2];
        thisArray[index2] = temp;
//        System.out.print(count + "  ");

//        printArraySimple(thisArray);
//        System.out.println();
    }


    ///// BINARY SEARCH
    public void binarySearch(int value, int[] thisArray) {
        int lowIndex = 0;
        int highIndex = (thisArray.length - 1);

        while (lowIndex <= highIndex) {
            int middleIndex = (lowIndex + highIndex) / 2;
            if (value > thisArray[middleIndex]) {
                highIndex = middleIndex - 1;
            } else if (value < thisArray[middleIndex]) {
                lowIndex = (middleIndex + 1);
//            } else if (thisArray[middleIndex] == value)
//                System.out.println("Value " + value + " found at index " + middleIndex);
//            } else if (highIndex == lowIndex) {
//                System.out.println("Value " + value + " found at index " + middleIndex + ".");
//                lowIndex = highIndex + 1;
            } else if (thisArray[middleIndex] == value) {
                System.out.println("Value " + value + " found at " + middleIndex);
                lowIndex = highIndex + 1;
            } else {
                System.out.println("Value not found.");
            }
        }
    }

    ///// SELECTION SORT
    public void selectionSort(int[] thisArray) {
        int arraySize = thisArray.length;
        // int thatArray[] = new int[arraySize];

        // loop to find the smallest element
        for (int i = 0; i < (arraySize - 1); i++) {
            int min = 0;
            for (int j = i + 1; j < arraySize - 1; j++) {
                if (thisArray[j] < thisArray[min]) {
                    min = j;
                } else {
                    swapValues(thisArray, j, j + 1);
                }
            }
            // store the smallest to sortedArray

        }
    }

    public static void main(String[] args) {
        Sort newArray = new Sort();
        int[] thisArray = newArray.generateRandomArray(10);
        newArray.printArraySimple(thisArray);
//        System.out.println();
        int arraySize = thisArray.length;
//        String space = "   ";
//        for (int n = 0; n < arraySize; n++) {
//            newArray.printHorzArray(-1, -1);
//            System.out.println(space + n);
//            space = space + "     ";
//        }
        // System.out.println(linearSearch(theArray, 11));
        int[] sortedArray = newArray.bubbleSort(thisArray);
//        newArray.printArray();
        newArray.binarySearch(5, sortedArray);
    }
}
