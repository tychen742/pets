package org.tychen.java.codingexercises;

public class NumberInWord {

    public static void printNumberInWord (int number) {
        String aString;
        switch (number) {
            case 0:
                aString = "ZERO";
                break;
            case 1:
                aString = "ONE";
                break;
            case 2:
                aString = "TWO";
                break;
            case 3:
                aString = "THREE";
                break;
            case 4:
                aString = "FOUR";
                break;
            case 5:
                aString = "FIVE";
                break;
            case 6:
                aString = "SIX";
                break;
            case 7:
                aString = "SEVEN";
                break;
            case 8:
                aString = "EIGHT";
                break;
            case 9:
                aString = "NINE";
                break;
            default:
                aString = "OTHER";
                break;
        }
        System.out.println(aString);
    }
}
