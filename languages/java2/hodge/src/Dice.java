import java.util.Random;

public class Dice {
//    private static int num1;

    int faceValue = 0;
    static int sidesOfDice = 6;
    int previousRoll = -1;
    Random rand;

    public Dice() {
        this.rand = new Random();
    }

    // roll method
    public int roll() {
        int currentRoll = rand.nextInt(6) + 1;
        this.previousRoll = currentRoll;
        // return currentRoll;

        this.faceValue = rand.nextInt(sidesOfDice) + 1;
        return this.faceValue;
    }

    public static void changeNumSidesOfDice(int newNumberOfSides) {
        Dice.sidesOfDice = newNumberOfSides;
    }

    // retrieving face value
    public int getFaceValue() {
        return this.faceValue;
    }

}
