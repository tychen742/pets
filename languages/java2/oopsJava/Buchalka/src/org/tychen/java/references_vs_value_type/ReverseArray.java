package org.tychen.java.references_vs_value_type;

import java.util.Arrays;

public class ReverseArray {

    public static void main(String[] args) {
        // create array here
        int arrayA[] = new int[]{1, 2, 3, 4, 5, 6};
        int arrayB[] = arrayA;

        System.out.println(Arrays.toString(arrayA));

        // call reverse
        int[] arrayC = reverse(arrayB);

        // print
        System.out.println(Arrays.toString(arrayB));
    }

    private static int[] reverse(int[] array) {

//        for (int i = 0; i <= (array.length/2); i++) {
        int i = 0;
        int len = array.length;
        int end = len - 1;
        while (i < (len / 2)) {
            int temp = array[i];
            array[i] = array[end];
            array[end] = temp;
            i ++;
            end --;
        }
        return array;
    }

}
