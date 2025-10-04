import java.util.Scanner;

public class MathOperations {

    static Scanner sc = new Scanner(System.in);

    public static void main(String[] args) {

        System.out.println("8 + 7 = " + (8 + 7));
        System.out.println("8 - 7 = " + (8 - 7));
        System.out.println("8 * 7 = " + (8 * 7));
        System.out.println("8 / 7 = " + (8 / 7));
        System.out.println("9.0 / 7.0 = " + 9.0 / 7.0);
        System.out.println("9 % 7 = " + (9 % 7)); // modulus: gives the remainder of the divisision

        double doubleA = 9.0 / 7.0;
//        float floatA = 5.0/4.0;
        double doubleB = 5.0 / 4.0;

//        math operation shortcuts
        int increaseByOneA = 0;
        System.out.println("increaseByOne: " + increaseByOneA++);
        System.out.println("increaseByOne: " + increaseByOneA);

        int increaseByOneB = 0;
        System.out.println("increaseByOneB: " + ++increaseByOneB);
        System.out.println("increaseByOneB: " + increaseByOneB);

//        increment by *
        int increaseByTwoA = 0;
        int increaseByTwoB = increaseByTwoA += 2;
        System.out.println("increaseByTwoB: " + (increaseByTwoB));

// Check type
        System.out.println("doubleA type: " + ((Object) doubleA).getClass().getName());

//    Math functions
        System.out.println("abs(-1) = " + Math.abs(-1));
        System.out.println("ceil(3.14159) = " + Math.ceil(3.14159));
        System.out.println("ceil(3.14159) = " + Math.ceil(3.14159));
        System.out.println("floor(3.14159) = " + Math.floor(3.14159));
        System.out.println("round(3.14159) = " + Math.round(3.14159));
        System.out.println("pow(10, 3) = " + Math.pow(10, 3));
        System.out.println("sqrt(9) = " + Math.sqrt(9));
        System.out.println("cbrt(27) = " + Math.cbrt(27));
        System.out.println("log10(1) = " + Math.log10(1));
        System.out.println("exp(1) = " + Math.exp(1));
        System.out.println("PI = " + Math.PI);

        System.out.println("max(1, 5) = " + Math.max(1, 5));
        System.out.println("min(1, 5) = " + Math.min(1, 5));

// Trig Functions
        System.out.println("sin(1.5708) = " + Math.sin(1.5708));
        System.out.println("cos(1.5708) = " + Math.cos(1.5708));
        System.out.println("tan(1.5708) = " + Math.tan(1.5708));

//        random numbers
        for (int i = 0; i < 10; i++) { // why 0? arrays are zero-based.
            System.out.println("random number (1-10): " + (int) (Math.random() * 10 + 1));
            System.out.println("random number (0-10): " + (int) (Math.random() * 11));
        }
    }


}
