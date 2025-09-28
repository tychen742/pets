public class StringChallenge {


    public static void main(String[] args) {

        String s1 = "Hello";
        String s2 = " there is a quiet Mouse";
        String s3 = "I am happy   ";

        vAndC(s1);
        vAndC(s2);
        vAndC(s3);

        System.out.println("ALGO 1 ---------------");


        System.out.println("ALGO 2 ---------------");

    }

    public static void vAndC(String input) {
        int vCount = 0;
        int cCount = 0;
        String vowels = "aeiouy";
        // turn s into charArray
        String inputTrimmed = input.trim();
        String inputLowerCase = input.toLowerCase();
        char[] inputCharArray = inputLowerCase.toCharArray();
        // for each , add up
        for (char c : inputCharArray) {
            //    System.out.println(c);
            if (vowels.indexOf(c) != -1) {
                vCount++;
            } else if (c != ' ') {
                cCount++;
            }
        }

        System.out.println("Input " + inputTrimmed + " constant count: " + cCount);
        System.out.println("Input " + inputTrimmed + " vowel count: " + vCount);
    }


}
