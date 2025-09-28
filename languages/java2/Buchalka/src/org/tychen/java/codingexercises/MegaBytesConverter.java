package org.tychen.java.codingexercises;

public class MegaBytesConverter {

    int kiloBytes = 2050;

    public static void printMegaBytesAndKiloBytes(int kiloBytes) {

        if ( kiloBytes < 0) {
            System.out.println("Invalid Value");
        } else {
            int megaBytes = (kiloBytes / 1024);
            int remain = kiloBytes % 1024;
            // System.out.println(megaBytes);
            System.out.println(kiloBytes + " KB = " + megaBytes + " MB and " + remain + " KB");
        }
    }
}
