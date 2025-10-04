package org.tychen.java.codingexercises;

public class BarkingDog {

    public static boolean bark(boolean barking, int hourOfDay) {
        if ((hourOfDay < 0 ) || (hourOfDay > 23))         {
            return false;
        } else return (barking == true) && ((hourOfDay < 8) || (hourOfDay > 22));

    }
}
