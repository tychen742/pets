package org.tychen.java.checkedexception;

public class Main {

    public static void main(String[] args) {

        try {
            String welcome = "Welcome!";
            char[] chars = welcome.toCharArray();
            char lastChar = chars[chars.length -1 ];
            System.out.println("Last character: " + lastChar);
        } catch (ArrayIndexOutOfBoundsException e) {
            System.out.println("Array index exception");
            e.printStackTrace();
            return;
        } catch (Exception e) {
            System.out.println("Any exception");
        }

        try {
            Thread.sleep(1000); // checked exception. need to declare first
        } catch (InterruptedException e) {
            e.printStackTrace();
        }

        try {
            doStomthing();
        } catch (InterruptedException e) {
            e.printStackTrace();
        }

        System.out.println("Code ran successfully");

    }

    // custom method
    public static void doStomthing() throws InterruptedException {
        Thread.sleep(100);
    }
}
