package org.tychen.java.instancevariables;

public class Main {


    public static void main(String[] args) {

        MathHelper helper = new MathHelper(100);
        try {
            while (true) {
                int input = helper.doMath("Enter a number: ", MathHelper.ADD);
                int total = helper.getTotal();
                String message = String.format(
                        "Entered: %d, total = %d", input, total
                );
                System.out.println(message);
            }
        } catch (NumberFormatException e) {
//            e.printStackTrace();
            System.out.println("All done");
        }
    }
}
