// Relational Operators: == != > < >= <=
// Logical Operators: ! && ||
// Ternary Operation

import java.util.Scanner;

public class Conditions {

    static Scanner sc = new Scanner(System.in);

    public static void main(String[] args) {

//        1. if; 2. if-else; 3. if-elseif-else; 4. switch; 5. ternary
        int age = 0;
        System.out.println("Please Enter Your Age: ");
        if (sc.hasNextLine()) {
//            age = (int) sc.nextLine() // String is not a primitive, therefore does not work
            String ageStr = sc.nextLine();
            age = Integer.parseInt(ageStr);
        }

        if ((age >= 4) && (age <= 6)) {
            System.out.println("Go to kindergarten");
        } else if ((age >= 7) && (age <= 12)) {
            System.out.println("Go to Elementary School");
        } else if ((age >= 13) && (age <= 15)) {
            System.out.println("Go to Middle School");
        } else if ((age >= 16) && (age <= 18)) {
            System.out.println("Go to High School");
        } else {
            System.out.println("Go to college, get a job, or do what whatever you want to do.");
        }

        if (age > 21) {
            System.out.println("You are an adult.");
        } else {
            System.out.println("You are not an adult.");
        }

        System.out.println("true || false = " + (true || false));
        System.out.println("!true = " + !true);

        // ternary operation
        boolean canVote = (age >= 18) ? true : false;
        if (canVote == true) {
            System.out.println("You can vote.");
        } else {
            System.out.println("You cannot vote.");
        }
    }

}