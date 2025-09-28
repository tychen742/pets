package org.tychen.java.abstractclasses;


public class Main {

    public static void main(String[] args) {

//        ClothingItem item = new ClothingItem("Shirt", "L", 19.99);
//        displayProduct(item);

        Shirt shirt = new Shirt("M", 14.99);
        displayProduct(shirt);
        shirt.setPattern("Zigzag");
        System.out.println("This shirt's pattern is " + shirt.getPattern());

        ClothingItem reallyAShirt = new Shirt("L", 12.99);
        displayProduct(reallyAShirt);
        System.out.println("The really a shirt; " + reallyAShirt);

        Shirt shirt2 = (Shirt) reallyAShirt;
        shirt2.setPattern("Solid");
        System.out.println("shirt2 pattern = " + shirt2.getPattern());
    }

    private static void displayProduct(Product product) {
        String output = product.getClass().getSimpleName()+ "{" +
                "type='" + product.getType() + '\'' +
                ", size='" + product.getSize() + '\'' +
                ", price=" + product.getPrice() +
                '}';
        System.out.println(output);
    }
}
