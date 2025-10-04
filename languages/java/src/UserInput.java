import javax.swing.*;
import java.util.Scanner;

public class UserInput {

    static Scanner sc = new Scanner(System.in);

    public static void main(String[] args) {
        System.out.print("Please enter your name: ");
        if (sc.hasNextLine()) {
            String userName = sc.nextLine(); // String
            System.out.println("Hello, " + userName);
        }

        System.out.print("Please enter your age: ");
        if (sc.hasNextLine()) {
            try {
                int age = Integer.parseInt(sc.nextLine());
                System.out.println("You are " + age + " years old.");
            } catch (NumberFormatException exception) {
                System.out.println("Please enter a number. Error: " + exception);
            }
        }

        System.out.print("Please enter the amount of deposit: ");
        if (sc.hasNextLine()) {
            try {
                double deposit = Double.parseDouble(sc.nextLine());
                System.out.println("You deposited " + deposit + " dollars.");
            } catch (NumberFormatException exception) {
                System.out.println("Please enter a number. Error: " + exception);
            }
        }

        String jopName =
                JOptionPane.showInputDialog(("Please enter your full name:"));
        System.out.println("Hey, " + jopName);
    }

}
