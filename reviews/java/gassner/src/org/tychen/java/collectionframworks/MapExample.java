package org.tychen.java.collectionframworks;

import java.util.HashMap;
import java.util.Map;

public class MapExample {

    public static void main(String[] args) {
        Map<String, Integer> pets = new HashMap<>();
        pets.put("Dog", 1);
        pets.put("Cat", 2);
        pets.put("Fish", 3);

//        for (HashMap pet : pets) {
//            System.out.println(pet);
//        }

        System.out.println(pets);

        pets.put("Bird", 5);
        System.out.println(pets);

        System.out.println(pets.get("Dog"));
        System.out.println(pets.get("Horse")); // null object

        pets.remove("Horse");
        System.out.println(pets);
    }
}
