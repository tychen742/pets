public class Strings {


    public static void main(String[] args) {
        String name = "TY";
        String fullName;
        fullName = name + " Chen";
        System.out.println(fullName);
//        fullName = 'Tsangyao Chen';
        fullName = "Tsangyao Chen";
        System.out.println(fullName);


//         String comparison: equals
        String myStr1 = "Hello";
        String myStr2 = "Hello";
        String myStr0 = myStr1;
        System.out.println("myStr0 == myStr1: " + (myStr0 == myStr1));
        System.out.println("myStr1 == myStr2: " + (myStr1 == myStr2));
        System.out.println("myStr1.equals(myStr2): " + myStr1.equals(myStr2));
        System.out.println("myStr1.equalsIgnoreCase(myStr2): " + myStr1.equalsIgnoreCase(myStr2));
        System.out.println(myStr1.compareTo(myStr2));

        String myStr3 = new String("World");
        String myStr4 = new String("World");
        String myStr5 = new String(myStr0);
        System.out.println("myStr3 == myStr4: " + (myStr3 == myStr4));
        System.out.println("myStr3.equals(myStr4): " + myStr3.equals(myStr4));
        System.out.println(myStr5);
        System.out.println("compareTo: " + "a".compareTo("b"));

//        indexing & length
        System.out.println(fullName.charAt(0));
        System.out.println(fullName.charAt(1));
        System.out.println(fullName.charAt(2));
        System.out.println(fullName.contains("Chen"));
        System.out.println(fullName.indexOf("Chen"));
        System.out.println(fullName.length());

        // substrings: replace
        System.out.println(fullName.replace("Chen", "Smith"));
        System.out.println(fullName.substring(0, 5));
// split
        for (String x: fullName.split(" ")){
            System.out.println(x);
        }

        // trim, toUpperCase, toLowerCase

        // StringBuilder (StringBuffer is for threads)
        StringBuilder sb = new StringBuilder("I am a string.");
        System.out.println(sb.length());
        System.out.println(sb.capacity());
        System.out.println(sb.append("HELLO"));
        System.out.println(sb.delete(2, 5));
//        System.out.println(sb.delete(-1, -5));
        System.out.println(sb.insert(1, " INSERTED"));
        System.out.println(sb.replace(2, 10, "REPLACED"));
        System.out.println(sb.charAt(2));
        System.out.println(sb.indexOf("R"));
    }
}
