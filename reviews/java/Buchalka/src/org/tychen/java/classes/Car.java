package org.tychen.java.classes;

public class Car {

    private int doors;
    private int wheels;
    private String model;
    private String engine;
    private String color;

    public void setModel (String model) {

        String validModel = model.toLowerCase();
        if (validModel.equals("carrera") || validModel.equals("commodore")) {
            this.model = model;
        } else {
            this.model = "Unknown";
        }

        // this.model = model; // this is instance variable, as opposed to parameter model
    }

    public String getModel() {
        return this.model;

    }

}
