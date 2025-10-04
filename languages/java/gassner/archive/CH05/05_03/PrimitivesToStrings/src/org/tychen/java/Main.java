package org.tychen.java;

import java.text.NumberFormat;

public class Main {

    public static void main(String[] args) {
        int intValue = 42;
        String fromInt = Integer.toString(intValue); // Helper class
        System.out.println(fromInt);

        boolean boolValue = true;
        String fromBoolean = Boolean.toString(boolValue); // Helper class of primitive data types
        System.out.println(fromBoolean);

        long longVlaue = 10_000_000;
        String fromLong = Long.toString(longVlaue);
        System.out.println(fromLong);

        NumberFormat formatter = NumberFormat.getNumberInstance();
        String formatted = formatter.format(longVlaue);
        System.out.println(formatted);
    }
}
