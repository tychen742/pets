package org.tychen.java;

public class Main {

    static String[] months = {
            "January", "February", "March", "April",
            "May", "June", "July", "August",
            "September", "October", "November", "December"
    };


    public static void main(String[] args) {
        // call method
        loopIt("Months of the year");
        loopIt("Second run");
        loopIt("Third run");
    }


    static void loopIt(String label) { // signature change
        // static: to be called from main
        // void: return nothing
        // () declare types and names of parameters
        // {} code block
        System.out.println(label);
        for (int i = 0; i < label.length(); i++) {
            System.out.print("*");
        }
        System.out.println();

        for (int i = 0; i < months.length; i++) {
            System.out.println(months[i]);
        }
    }
} // class declaration
