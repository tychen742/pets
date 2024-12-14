package org.tychen.java.extendclasses;

public class Main {

    public static void main(String[] args) {

        ClothingItem item = new ClothingItem("Shirt", "L", 19.99);
        System.out.println(item); // no need to call the toString method explicitly

        Shirt shirt = new Shirt("M", 14.99);
        System.out.println(shirt);
    }
}
