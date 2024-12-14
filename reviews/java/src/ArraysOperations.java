import java.util.ArrayList;
import java.util.Arrays;
import java.util.Iterator;
import java.util.LinkedList;
import java.util.stream.IntStream;

public class ArraysOperations {

    public static void main(String[] args) {

        int[] arr1 = new int[10];
        System.out.println(arr1);
        System.out.println(arr1[0]);
        arr1[0] = 1;
        arr1[1] = 9;
        System.out.println(arr1);
        System.out.println(arr1[0]);

        Arrays.fill(arr1, 9);

        for (int x : arr1)
            System.out.print(x + " ");
        System.out.println();
        arr1 = IntStream.rangeClosed(1, 10).toArray();
        for (int x : arr1) System.out.print(x + " ");
        System.out.println();
        // multidimensional arrays
        int arr2[][] = new int[2][2];
        arr2[0][0] = 1;
        arr2[0][1] = 2;
        arr2[1][0] = 3;
        arr2[1][1] = 4;
        for (int i = 0; i < 2; i++) {
            for (int j = 0; j < 2; j++) {
                System.out.print(arr2[i][j] + " ");
            }
            System.out.println();
        }

        String[][] arr3 = {
                {"00", "01"},
                {"10", "11"}
        };
        System.out.println(arr3[0][0]);
        System.out.println(arr3[0][1]);
        System.out.println(arr3[1][0]);
        System.out.println(arr3[1][1]);


        String[][] animals = {
                {"Alligator", "Buffalo", "Cheetah"},
                {"Deer", "Elephant", "Fox"},
                {"Goose", "Hamster", "Iguana"}
        };
        for (int a = 0; a < animals.length; a++) {
            System.out.print(animals[a][0] + " ");
            for (int b = 1; b < animals[a].length; b++) {
                System.out.print(animals[a][b] + " ");
            }
            System.out.println();
        }

        // search array
//        System.out.println(Arrays.binarySearch(animals, "Fox"));
        int[] intArray = new int[5];
        intArray[0] = 1;
        intArray[1] = 2;
        intArray[2] = 3;
        intArray[3] = 4;
        intArray[4] = 5;

        System.out.println(Arrays.binarySearch(intArray, 4));

        // three-dimension array
        String[][][] arrayString = {
                {
                        {"000", "001"},
                        {"010", "011"},
                        {"020", "021"},
                        {"030", "031"}
                },
                {
                        {"100", "101"},
                        {"110", "111"},
                        {"120", "121"},
                        {"130", "131"}
                },
                {
                        {"200", "201"},
                        {"210", "211"},
                        {"220", "221"},
                        {"230", "231"}
                }
        };
        System.out.println(arrayString[0][0][0]);
        System.out.println(arrayString[1][1][0]);
        System.out.println(arrayString[2][2][0]);
        System.out.println(arrayString[2][3][0]);
        System.out.println(arrayString[2][3][1]);

        // copyOf
//        String[] arrayString2 = Arrays.copyOf(arrayString, 1);
        int[] intArray2 = {1, 2, 5, 4, 5};
        int[] intArray3 = Arrays.copyOf(intArray2, 5);
        System.out.println(Arrays.equals(intArray2, intArray3));

        Arrays.sort(intArray2);
        for (int element : intArray2) System.out.print(element + " "); // enhanced for loop

        System.out.println(intArray2);
        System.out.println(arrayString);
        System.out.println(Arrays.toString(intArray2));
        System.out.println(Arrays.toString(intArray3));
        System.out.println(Arrays.toString(arrayString));

    }

}
