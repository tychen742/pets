package org.tychen.java.abstractclasses;


public class Shirt extends ClothingItem {

    private String pattern = "Not set";

    public String getPattern() {
        return pattern;
    }

    public void setPattern(String pattern) {
        this.pattern = pattern;
    }

    public Shirt(String size, double price) {
        // super(type, size, price);
        super("Shirt", size, price);
        // when Shirt method is called, the arguments
        // are passed to the super class constructor

    }

    @Override
    public double getPrice() {
        return 22.95;
    }
}
