package org.tychen.java.collectionframworks;

import java.util.Arrays;

public class ArraysOfData {

    public static void main(String[] args) {

        // Primitive array
        System.out.println("Array of primitives:");
        int[] ints = {1, 3, 5};
        for (int i = 0; i < ints.length; i++) {
            System.out.println(ints[i]);
        }
        System.out.println();


        // String array
        System.out.println("Array of strings: ");
        String[] colors = {"Green", "Blue", "Blue"};
        for (String color : colors) {
            System.out.println(color);
        }
        System.out.println();


        // Object array
        System.out.println("Array of objects");
        ClothingItem[] items = new ClothingItem[3];
        items[0] = new ClothingItem("T-shirt", "Large", 10.0);
        items[1] = new ClothingItem("Jeans", "32", 15);
        items[2] = new ClothingItem("Shirt", "Small", 8);
        for (ClothingItem item : items) {
            System.out.println(item.getType() + ": " + item.getSize() +
                    ": " + item.getPrice());
            // System.out.println(item.toString());
        }
        System.out.println();


        /// Copy an Array
        ClothingItem[] copied = Arrays.copyOf(items, items.length);
        items[0].setType("Hat");
        copied[0].setPrice(200);

        System.out.println("copied");
        for (ClothingItem item : copied) {
            System.out.println(item.getType() + ": " + item.getSize() +
                    ": " + item.getPrice());
        }
        System.out.println("items: ");
        for (ClothingItem item : items) {
            System.out.println(item.getType() + ": " + item.getSize() +
                    ": " + item.getPrice());
        }
    }

}
