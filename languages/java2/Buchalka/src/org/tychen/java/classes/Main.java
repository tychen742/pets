package org.tychen.java.classes;

public class Main {

    public static void main(String[] args) {

        Car toyota; // declared but not initialized with "new" keyword
        Car porsche = new Car();
        Car holden = new Car();
        // porsche.model = "Carrera"; works for public fields
//        porsche = null;
        System.out.println("Model is: " + porsche.getModel());
        porsche.setModel("Carrera"); // user setter
        System.out.println("Model is: " + porsche.getModel());
        porsche.setModel("Silverado"); // user setter
        System.out.println("Model is: " + porsche.getModel());
    }
}
