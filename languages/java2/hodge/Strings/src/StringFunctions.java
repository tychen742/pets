public class StringFunctions {

    static String text = "IT is a truth universally acknowledged, that a single man " +
            "in possession of a good fortune must be in want of a wife. " +
            "However little known the feelings or views of such a man may " +
            "be on his first entering a neighbourhood, this truth is so well " +
            "fixed in the minds of the surrounding families, that he is " +
            "considered as the rightful property of some one or other " +
            "of their daughters.";

    public static void main(String[] args) {

        // split sentences
        String[] sentences = text.split("\\.");
        System.out.println("The text has " + sentences.length + " sentences.");
        for (String sentence : sentences) {
            // System.out.println(sentence);
        }

        // words splitting
        String[] words = text.split(" ");
        System.out.println("The text has " + words.length + " words.");
        for (String word : words) {
            // System.out.println(word);
        }

        // characters
        System.out.println("The text has " + text.length() + " characgters.");

        // replacement
        String mayText = text.replace("may", "could");
        System.out.println(mayText);
        System.out.println("The mayText has " + mayText.length() + " characgters.");
    }

    // reverse a string
    public static StringBuilder reverse(String s) {
        int strLen = s.length();
        StringBuilder sb = new StringBuilder();
        String reversed = "";
        for (int i = s.length() - 1; i >= 0; i--) {
            System.out.println(s.charAt(i));
            sb.append(s.charAt(i));
        }
        return sb;
    }


}
