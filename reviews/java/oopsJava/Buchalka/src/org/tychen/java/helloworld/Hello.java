package org.tychen.java.helloworld;

public class Hello {

    public static void main(String[] args) {

        boolean result = bark(true, 10);
        System.out.println(result);
    }

    public static boolean bark(boolean barking, int hourOfDay) {
        return barking == true && ((hourOfDay < 8) || (hourOfDay > 22));

    }
}

