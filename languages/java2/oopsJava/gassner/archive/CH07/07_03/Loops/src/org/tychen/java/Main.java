package org.tychen.java;

public class Main {

    public static void main(String[] args) {

        String[] months = {
                "January", "February", "March", "April",
                "May", "June", "July", "August",
                "September", "October", "November", "December"
        };

//        for (int i = 0; i < months.length ; i++) {    // incremental
//            System.out.println(months[i]);
//        }

/*        for (int i = months.length - 1; i >= 0; i--) {  // decremental
            System.out.println(months[i]);
        }

        for(String month : months) {    // for each: simpler but less flexible
            System.out.println(month);
        }*/

/*        int counter = 0;                // while
        while (counter < months.length) {
            System.out.println(months[counter]);
            counter++;
        }*/

        int counter = 0;                // do while
        do {
            System.out.println(months[counter]);
            counter++;
        } while (counter < months.length);

    }
}
