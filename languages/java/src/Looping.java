// for loop
// while loop
// do while loop
// enhanced for loop
// foreach loop

import java.util.Scanner;
public class Looping {
    // for loop, while loop, do-while, enhanced for loop, foreach loop,
    public static void main(String[] args) {
        // c style for loop
        for (int i = 0; i < 5; i++) {
            System.out.println(i);
        }

        // while loop: continue & break
        int wL = 0;
        while (wL < 10) {
            if (wL % 2 == 0) {
                System.out.println(wL);
                wL++;
                continue;
            }
            if (wL == 9) {
                break;
            }
            wL++;
        }

        // do-while loop
        Scanner sc = new Scanner(System.in);
        int secretNumber = 7;
        int guessNumber = 0;
        do {
            System.out.print("Guess: ");
            if (sc.hasNextInt()) {
                guessNumber = sc.nextInt();
            }
        } while (secretNumber != guessNumber);
        System.out.println("You guessed right!");
    }
}
