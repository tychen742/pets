package org.tychen.java.casting;

public class Main {

    public static void main(String[] args) {

        ClothingItem item = new ClothingItem("Shirt", "L", 19.99);
        System.out.println(item); // no need to call the toString method explicitly

        Shirt shirt = new Shirt("M", 14.99);
        System.out.println(shirt);
        shirt.setPattern("Plaid");
        System.out.println("This shirt's pattern is " + shirt.getPattern());

        ClothingItem reallyAShirt = new Shirt("L", 12.99);
        // ClothingItem: declaration; Shirt: constructor
        System.out.println(reallyAShirt);

        ((Shirt) reallyAShirt).setPattern("Solid");
        System.out.println(((Shirt) reallyAShirt).getPattern());

        Shirt shirt2 = (Shirt) reallyAShirt;
        shirt2.setPattern("Solid");
        System.out.println("Pattern = " + shirt2.getPattern());
    }
}
