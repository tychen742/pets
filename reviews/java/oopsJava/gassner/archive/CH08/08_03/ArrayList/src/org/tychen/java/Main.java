package org.tychen.java;

import java.util.ArrayList;
import java.util.List;

public class Main {

    public static void main(String[] args) {

        List<String> list = new ArrayList<>();  //<> the diamond operator
        // An ArrayList contains an ordered list of data; a resizable array.

        list.add("California");
        list.add("Oregon");
        list.add("Washington");
        list.add("Ohio");
        list.add("Florida");

        System.out.println(list);

        list.add("Alaska");
        System.out.println(list);

        list.remove(0);
        System.out.println(list);

        String state = list.get(1);
        System.out.println("The second state is " + state); // 0-based indexing

        int pos = list.indexOf("Alaska");
        System.out.println("Alaska is at position " + pos);

    }
}
