package org.tychen.java;

public class Main {

    public static void main(String[] args) {

        ///// primitive values
        int original = 10;
        System.out.println("Original int before: " + original);
        incrementValue(original);
        System.out.println("Original int after: " + original);


        ///// Primitives wrapped in objects
        int[] arrOriginal = {10, 20, 30};
        System.out.println("Original int[] before: " + arrOriginal[0]);
        incrementValue(arrOriginal);
        System.out.println("Original int[] after: " + arrOriginal[0]);
        // original value changed because it's primitive (wrapped
        // by object)


        String orignal = "Oringinal!";
        System.out.println("Original before: " + orignal);
        changeString(orignal);
        System.out.println("Original after: " + orignal);


    }

    static void incrementValue(int inMethod) {
        inMethod++;
        System.out.println("In method: " + inMethod);
    }

    static void incrementValue(int[] inMethod) {
        inMethod[0]++;
        System.out.println("In method: " + inMethod[0]);
    }

    static void changeString(String inMethod) {
        inMethod = "New!";
        System.out.println("In method: " + inMethod);
    }


}

