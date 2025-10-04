package org.tychen.java;

import java.util.HashMap;
import java.util.Map;

public class Main {

    public static void main(String[] args) {

// unordered data

        Map<String, String> map = new HashMap<>();
// HashMap is a concrete implementation of Map in Java
        // can't instantiate the Map interface directly
        // because we'll have to implement all the code

        map.put("California", "Sacramento");
        map.put("Oregon", "Salem");
        map.put("Washington", "Olympia");
        map.put("Ohio", "Columbus");
        map.put("Florida", "Tallahassee");
        System.out.println(map);

        map.put("Alaska", "Juneau");
        System.out.println(map);

        String cap = map.get("Oregon");
        System.out.println("The capitol of Oregon is " + cap);

        String state = map.get("Tallahassee");
        System.out.println(state); // can get v only

        map.remove("California");
        System.out.println(map);

    }
}
