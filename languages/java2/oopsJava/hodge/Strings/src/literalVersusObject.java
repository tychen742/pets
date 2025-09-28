public class literalVersusObject {

    public static void main(String[] args) {

        String literal = "hello";
        String otherLiteral = "hello"; // unchanged
        String obj = new String("hello"); // obj of util.string class
        String otherObj = new String("hello");

        // equality statements
        System.out.println(literal == obj);
        System.out.println(literal == otherLiteral);
        System.out.println(literal.equals(obj)); // .equsl: compare true values
        System.out.println(literal.equals(otherLiteral));

        System.out.println(obj == otherObj);
        System.out.println(obj.equals(otherObj));


    }
}
