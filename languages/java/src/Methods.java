import java.util.Arrays;
import java.util.List;

public class Methods {

    // methods with no parameter
    static void errorMessage() { // no need to give data type since no data involved
        System.out.println("Error Message!");
    }

    // methods with return statement
    static int changeNumber(int aNumber) { // caller needs to provide param value
        aNumber = 10;
        return aNumber; // send back to caller
    }

    // methods with > 1 arguments
    static int sumTwo(int x, int y) {
        int summed = x + y;
        return summed;
    }

    // unspecified number of arguments
    static int sumAll(int... nums) {
        int sum = 0;
        for (int x : nums) { // loop through
            sum += x;
        }
        return sum;
    }

    // return an array of values
    static int[] returnArray(int x) {
        int[] values = new int[2];
        values[0] = x + 1;
        values[1] = x + 2;
        return values;
    }

    static List<Object> getRandomList() {
        String name = "TY";
        int age = 45;
        return Arrays.asList(name, age);
    }

    // Recursive function
    static int factorial(int num) {
        if (num == 1) {
            return 1;
        } else {
            int result = num * factorial(num - 1);
            return result;
        }
    }


    // main
    public static void main(String[] args) {
        int aNumber = 0;
        int numberChanged = changeNumber(aNumber);
        System.out.println("1. to10: aNumber is changed to: " + numberChanged);

        int aSum = sumTwo(10, 15);
        System.out.println("2. sumTwo: Sum of 10 & 15: " + aSum);
        System.out.println("2. sumTwo: Sum of 10 & 20: " + sumTwo(10, 20));

        System.out.println("3. sumAll: Sum them all (1, 2, 3, 4, 5): " + sumAll(1, 2, 3, 4, 5));


        // access returned arrays: for loop
        int[] arrReturned = returnArray(500);
        for (int index = 0; index < arrReturned.length; index++) {
            System.out.println("array element " + index + ": " + arrReturned[index]);
        }

        // access returned arrays: enhanced for loop
        System.out.println("Returned array: " + returnArray(100));
        System.out.println("Returned array toString: " + Arrays.toString(returnArray(100)));

        int[] arrayReturned = returnArray(100); // save returned array to variable
        for (int element : arrayReturned) {
            System.out.println(element);
        }

        for (int element : returnArray(100)) { // don't save returned to variable
            element = element * 5;
            System.out.println("array element: " + element);
        }

        // return values with different types
        List<Object> randomList = getRandomList(); // Object: the mother of everything
        System.out.println(randomList);

        // factorial / recursion
        System.out.println("Factorial of 4 = " + factorial(4));
    }

}
