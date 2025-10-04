package org.tychen.java.codingexercises;

public class NumberOfDaysInMonth {

    public static void main(String[] args) {
        int days = getDaysInMonth(2, 1000);
        System.out.println(days);
    }


    public static boolean isLeapYear(int year) {

        if ((year < 1) || (year > 9999)) {
            return false;
        } else if (year % 400 == 0) {
            return true;
        } else if (year % 100 == 0) {
            return false;
        } else return year % 4 == 0;
    }


    public static int getDaysInMonth(int month, int year) {
        if ((year < 1) || (year > 9999)) {
            return -1;
        }
        switch (month) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                return 31;
            case 4:
            case 6:
            case 9:
            case 11:
                return 30;
            case 2:
                return (isLeapYear(year)) ? 28 : 29;
            default:
                return -1;
        }

    }


}
