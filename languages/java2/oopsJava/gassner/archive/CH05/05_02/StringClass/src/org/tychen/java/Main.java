package org.tychen.java;

public class Main {

    public static void main(String[] args) {
        String s1 = "This is a String.";
        System.out.println(s1);

        String s2 = new String("This is a String.");
        System.out.println(s2);

        String s3 = "Shirt size: ";
        String s4 = "M";
        String s5 = s3 + s4;
        System.out.println(s5);
        String s6 = s5 + ", Qty: " + 4;
        System.out.println(s6);

        char[] chars = {'H', 'e', 'l', 'l', 'o'};
        String s7 = new String(chars);
        System.out.println(s7);

        char[] chars2 = s7.toCharArray();
        for (char c : chars2) {
            System.out.println(c);
        }
    }
}
