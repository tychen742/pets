package org.tychen.java;

public class Main {

    static boolean booDeclared; // declared as a member of the class

    public static void main(String[] args) {
        boolean b1 = true;
        boolean b2 = false;

        System.out.println("The value of b1 is: " + b1);
        System.out.println("The value of b2 is: " + b2);
        System.out.println("The value of booDeclared is: " + booDeclared);
        // the default boolean value: FALSE
        // local variable must be initialized

        boolean booNegated = !b1;
        System.out.println("The value of b1 negated is: " + booNegated);

        int i1 = 0;
        boolean booExpr = (i1 != 0); // expression evaluating
        System.out.println("The value of booExpr: " + booExpr);

        String sBoolean = "true";
        boolean parsed = Boolean.parseBoolean(sBoolean);
        System.out.println("Parsed boo: " + parsed);
    }
}
