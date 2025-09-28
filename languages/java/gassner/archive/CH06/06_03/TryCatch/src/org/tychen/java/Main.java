package org.tychen.java;

public class Main {

    public static void main(String[] args) {

        String welcome = "Welcome!";
        char[] chars = welcome.toCharArray();

        try {
            char lastChar = chars[chars.length - 1];
            System.out.println(lastChar);
        } catch (ArrayIndexOutOfBoundsException e) {
            e.printStackTrace();
        }


    }
}
