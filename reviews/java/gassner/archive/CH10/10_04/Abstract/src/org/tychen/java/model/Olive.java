package org.tychen.java.model;

// A model class defines your data model

public abstract class Olive {    // no static keyword -> instance model

    private OliveName name = OliveName.KALAMATA; // declaration of instance variables, or fields
    private long color = 0xeE0854;
    private int oil = 3;


    public Olive(OliveName ligurian, OliveColor black, int oil) {
    }

    public Olive(OliveName name, long color, int oil) {
        this.name = name;
        this.color = color;
        this.oil = oil;
    }


    ////// public methods
    public OliveName getName()   {
        return name;
    }

    public void setName(OliveName name) {
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
        String msg = name + ", from " + getOrigin() +
                ": " + oil + " units";
        System.out.println(msg);
        return oil;
    }

    public void setOil(int oil) {
        this.oil = oil;
    }

    public abstract String getOrigin();

    @Override
    public String toString() {
        return name.toString();
    }
}
