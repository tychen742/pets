import java.util.HashMap;

public class HashMaps {

    public static void main(String[] args) {

        HashMap<String, Integer> wordToNum = new HashMap<>();

        wordToNum.put("ONE", 1);
        wordToNum.put("TWO", 2);
        wordToNum.put("THREE", 3);
        wordToNum.put("FOUR", 4);
        wordToNum.put("FIVE", 5);
        System.out.println("The HashMap: " + wordToNum);

        // Retrieve
        System.out.println("Value of key \"THREE\": " + wordToNum.get("THREE"));
        System.out.println("HashMap values: " + wordToNum.values());
        System.out.println("HashMap keys: " + wordToNum.keySet());

        // Remove
        System.out.println("Remove by key FOUR: " + wordToNum.remove("FOUR"));
        System.out.println("The HashMap: " + wordToNum);


        String s = "phonebook";
        HashMap<Character, Integer> hashMap = new HashMap<>();

        for (int i = 0; i < s.length(); i++) {
            Character currentChar = s.charAt(i);
            if (hashMap.containsKey(currentChar)) {
                hashMap.put(currentChar, hashMap.get(currentChar) + 1);
            } else {
                hashMap.put(currentChar, 1);
            }
        }

        Character mostRepeated = ' ';
        int max = 0;
        for (Character key : hashMap.keySet()) {
            int currentValue = hashMap.get(key);
            if (currentValue > max) {
                mostRepeated = key;
                max = currentValue;
            }
        }

        System.out.println("Most Repeated: " + mostRepeated + " | Times: " + max);

    }
}
