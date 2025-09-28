public class LearnJava {

    public static void main(String[] args) {
        String name = "Chen";
        System.out.println(name.toUpperCase());

        String exclaim = addExclamationPoint("Yellow Car");
        System.out.println(exclaim);

        Animal a = new Animal();
        String dog = a.iAmDog();
        System.out.println(dog);

        a.doStuff();

    }

    public static String addExclamationPoint(String s) {
        System.out.println(s + "!");
        return s + "!";
    }

}
