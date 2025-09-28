package org.tychen.java.model;

// A model class defines your data model

public class Olive {    // no static keyword -> instance method

    private String name = "Kalamata"; // declaration of instance variables, or fields
    private long color = 0xeE0854;
    private int oil = 3;

    // a class that's designed to encapsulate data, such as
    // the model class Olive, typically would have instance methods,
    // known as getters (accessor methods) and setters (modifier methods)

    public Olive(){} // no-argument constructor

    public Olive (String name, long color, int oil) {
        this.name = name;
        this.color = color;
        this.oil = oil;
    }


    ////// public methods
    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name; // this: distinguish the variable that's the
        // member of the instance from the argument, which as the same name.
    }

    public long getColor() {
        return color;
    }

    public void setColor(long color) {
        this.color = color;
    }

    public int crush() {
        System.out.println("Outch");
        return oil;
    }

    public void setOil(int oil) {
        this.oil = oil;
    }
}
