public class JavaArrays {

    public static void main(String [] args) {
        int[] nums;
        double[] otherNums = new double[5];

        String[] availablePets = {"cat", "dog", "fish"};
        String[] unavailablePets = {"bird", "rabbit", "hamster", "gerbil"};

        // Print arrays
        System.out.println(availablePets.toString());
        System.out.println(unavailablePets.toString());

        System.out.println(java.util.Arrays.toString(availablePets));
        System.out.println(java.util.Arrays.toString(unavailablePets));

        // replace
        String strFish = availablePets[2];
        String strBird = unavailablePets[0];
        availablePets[2] = strBird;
        unavailablePets[0] = strFish;
        System.out.println(java.util.Arrays.toString(availablePets));
        System.out.println(java.util.Arrays.toString(unavailablePets));

        // Find elements in an  array
    }
}