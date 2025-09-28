import java.util.Arrays;

public class Main {

    public static void main(String[] args) {

        String d = "Dog";
        String c = "Cat";
        String e = "Elephant";
        String f = "Fox";
        String b = "Beaver";
        String a = "Ant";

        String arrAnimal[] = {a, c, b, e, f, d,};
        for (String animal : arrAnimal) {
            System.out.println(animal);
        }

        // sorting array
        Arrays.sort(arrAnimal);
        String arrAnimalSorted[] = (arrAnimal);
        for (String animal : arrAnimal) {
            System.out.println(animal);
        }

        // printing length
        for (String animal : arrAnimalSorted) {
            System.out.println(animal + ": " + animal.length());
        }

        // cases
        for (String animal : arrAnimalSorted) {
            System.out.println(animal.toLowerCase());
            System.out.println(animal.toUpperCase());
        }

        // indices
        int index = 0;
        for (String animal : arrAnimalSorted) {
            System.out.println(animal.charAt(index));
            char[] charArray = animal.toCharArray();
            System.out.println("Char at " + index + ": " + charArray[index]);
            System.out.println("Index of a: " + animal.indexOf("a"));

            String aniLowerCase = animal.toLowerCase();
            if (aniLowerCase.contains("ant")) {
                System.out.println(animal + " contains ant.");
            }
            System.out.println(animal.substring(0, 2));
        }


        // reverse string
        StringBuilder sb = StringFunctions.reverse("ABC");
        System.out.println(sb);
        String className = sb.getClass().getName();
        System.out.println(className);
        String s2 = sb.toString();
        System.out.println(s2);
        System.out.println(s2.getClass().getName());
    }



}
