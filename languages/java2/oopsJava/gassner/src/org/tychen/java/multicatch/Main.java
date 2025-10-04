package org.tychen.java.multicatch;

public class Main {

    public static void main(String[] args) {

        try {
            String welcome = "Welcome!";
            char[] chars = welcome.toCharArray();
            char lastChar = chars[chars.length - 1];
            System.out.println("The las character is: " + lastChar);

            String nothing = null;
            System.out.println(nothing.length()); // calling method from null object
        } catch (
                ArrayIndexOutOfBoundsException e) {
            System.out.println("Array Index exception");
            e.printStackTrace();
            return;
        } catch (
                NullPointerException e) {
            System.out.println("Null exception");
            e.printStackTrace();
            return;
        } catch (
                Exception e) {
            System.out.println("Any exception");
            System.out.println("Code ran successfully.");
        }
    }
}

