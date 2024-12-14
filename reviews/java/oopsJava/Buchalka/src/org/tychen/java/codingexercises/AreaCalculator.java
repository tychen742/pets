package org.tychen.java.codingexercises;

public class AreaCalculator {

    public static double area (double radius) {
        if (radius < 0 ) {
            return -1.0;
        } else {
            double areaOfCircle = radius * radius * 3.14159;
            return areaOfCircle;
        }
    }

    public static double area (double x, double y) {
        if ( (x < 0 ) || (y < 0 ) ){
            return -1.0;
        } else {
            double areaOfRectangle = x * y;
            return areaOfRectangle;
        }
    }

}
