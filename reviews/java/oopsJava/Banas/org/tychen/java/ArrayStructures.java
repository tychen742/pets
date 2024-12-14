package org.tychen.java;

public class ArrayStructures {

//    private int[] theArray = new int[50];
    private int arraySize = 10;

    public void setArraySize(int arraySize) {
        this.arraySize = arraySize;
    }


    public int[] generateRandomArray(int arraySize) {
        setArraySize(arraySize);
        int[] theArray = new int[arraySize];
        for (int i = 0; i < arraySize; i++) {
            theArray[i] = (int) (Math.random() * 10 + 1);
        }
        return theArray;
    }

    public void printArray(int[] thisArray) {
        System.out.println("----------");
        for (int i = 0; i < thisArray.length; i++) {
            System.out.print("| " + i + " | ");
            System.out.println(thisArray[i] + " |");
            System.out.println("----------");
        }
    }

    public void printArraySimple(int[] thisArray) {
//        System.out.println("----------");
        for (int i = 0; i < thisArray.length; i++) {
//            System.out.print("| " + i + " | ");
            System.out.print(thisArray[i] + "|");
//            System.out.println("----------");
        }
        System.out.println();
    }

    public void printHorzArray(int[] thisArray) {
        for (int n = 0; n < 51; n++) {
            System.out.print("-");
        }
        System.out.println();
        for (int n = 0; n < arraySize; n++) {
            System.out.print("| " + n + "  ");
        }
        System.out.println("|");
        for (int n = 0; n < 51; n++) {
            System.out.print("-");
        }
        System.out.println();
        for (int n = 0; n < arraySize; n++) {
            System.out.print("| " + thisArray[n] + " ");
        }
        System.out.println("|");
        for (int n = 0; n < 51; n++) {
            System.out.print("-");
        }
        System.out.println();

        // FOR BUBBLE SORT


//        if (j != -1) {
//            // ADD THE +2 TO FIX SPACING
//            for (int k = 0; k < ((j * 5) + 2); k++) System.out.print(" ");
//            System.out.print(j);
//        }
//
//        // THEN ADD THIS CODE
//
//        if (i != -1) {
//            // ADD THE -1 TO FIX SPACING
//            for (int l = 0; l < (5 * (i - j) - 1); l++) System.out.print(" ");
//            System.out.print(i);
//        }
        System.out.println();

    }

    public int getValueAtIndex(int index, int[] thisArray) {
        if (index < arraySize)
            return thisArray[index];
        return 0;
    }

    public boolean doesArrayContainThisValue(int searchValue, int[] thisArray) {
        boolean valueInArray = false;
        for (int i = 0; i < arraySize; i++) {
            if (thisArray[i] == searchValue) {
                valueInArray = true;
            }
        }
        return valueInArray;
    }

    public void deleteIndex(int index, int[] thisArray) {
        int arraySize = thisArray.length;
        if (index < arraySize) {
            for (int i = index; i < (arraySize - 1); i++) {
                thisArray[i] = thisArray[i + 1];
            }
        }
        arraySize = arraySize - 1;
    }

    public void insertValue(int value, int[] thisArray) {
        int arraySize = thisArray.length;
        if (arraySize < 50) {
            thisArray[arraySize] = value;
        }
        arraySize++;
    }

//    public int[] getTheArray() {
//        return theArray;
//    }
//
    public int getArraySize() {
        return arraySize;
    }

    public static void main(String[] args) {

        ArrayStructures newArray = new ArrayStructures();
        newArray.generateRandomArray(10);
//        newArray.printArray();
//        System.out.println(newArray.getValueAtIndex(8));
//        System.out.println(newArray.doesArrayContainThisValue(13));
//        newArray.deleteIndex(0);
//        newArray.printArray();
//        newArray.insertValue(55);
//        newArray.insertValue(56);
//        newArray.printArray();
//        System.out.println(newArray.linearSearch(12));

    }

}
