<<<<<<< HEAD
import java.util.Scanner;

class Test {
=======
import java.util.*;

class Test {

>>>>>>> main
    public static void main (String[] args) {
        Math m = new Math();
        int answer = m.add(6, 1);
        System.out.println(answer);
    }
}


//class Program {
//    public static void main(String[] args) {
//        Scanner scanner = new Scanner(System.in);
//        String text = scanner.nextLine();
//        char[] arr = text.toCharArray();
//
//        //your code goes here
//
//        int len = arr.length-1;
////        System.out.println(len);
//        for (int i = 0; i <= (((len-1)/2) + 3); i++) {
//            char temp = arr[i];
////            System.out.println("from head: " + temp);
////            System.out.println();
////            System.out.println("from tail: " + arr[len]);
//            arr[i] = arr[len-1];
//            arr[len-1] = temp;
//            len = len - 1;
//        }
//        System.out.println(arr);
//    }
//}

class Program {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int amount = scanner.nextInt();
        //your code goes here


        for (int i = 1; i <= 3; i++) {
            amount = amount - (amount * 10 / 100);

        }

        System.out.println(amount);

    }
}