package org.tychen.java.extendclasses;

public class Shirt extends ClothingItem {

    public Shirt( String size, double price) {
       // super(type, size, price);
        super("Shirt", size, price);
        // when Shirt method is called, the arguments
        // are passed to the super class constructor

    }
}
