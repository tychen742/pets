package org.tychen.java;

import java.math.BigDecimal;

public class Main {

    public static void main(String[] args) {
        double value = .012;

        double pSum = value + value + value;
        System.out.println("Sum of primitive doubles: " + pSum); // not good

        // use BigDecimal
        String strValue = Double.toString(value); // use Double to cast to string
        System.out.println("strValue: " + strValue); //
        BigDecimal bigValue = new BigDecimal(strValue);
        BigDecimal bSum = bigValue.add(bigValue).add(bigValue);
        System.out.println("Sum of BigDecimals: " + bSum.toString());

    }
}
