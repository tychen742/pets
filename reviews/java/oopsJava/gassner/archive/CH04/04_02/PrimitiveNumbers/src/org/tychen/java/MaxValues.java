package org.tychen.java;

public class MaxValues {

    public static void main(String[] args) {
        byte b = 127;
        System.out.println("Byte value: " + b);

        b++;
//        System.out.println("Byte 127 incremented: " + b);

//        if(b < Byte.MAX_VALUE) {
//            b++;
//        }
        System.out.println("Byte value: " + b);
        System.out.println("Byte max value: " + Byte.MAX_VALUE);
        System.out.println("Byte min value: " + Byte.MIN_VALUE);

    }
}
