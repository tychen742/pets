package org.tychen.java.codingexercises;

public class SumOddRange {
    public static void main(String[] args) {
        int sum = sumOdd(1, 5);
        System.out.println(sum);
    }

    public static boolean isOdd(int number) {
        if (!(number > 0)) {
            return false;
        } else return number % 2 == 1;
    }


    public static int sumOdd(int start, int end) {

        if ((end < start) || ((start < 0) || (end < 0))) {
            return -1;
        }

        int sum = 0;
        for (int i = start; i <= end; i++) {
            if (isOdd(i)) {
                sum = sum + i;
            }

        }
        return sum;

    }

}


