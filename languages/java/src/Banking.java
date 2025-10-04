import java.util.Scanner;

public class Banking {

    double fundNow; // supposedly from a DB
    //    fundNow = 1000.9;
    String customerName;
    String customerAddress;

    public Banking() {
        fundNow = 1000; // from DB, dynamically when called

    }

    public double deposit(double amount) {
        return fundNow + amount;
    }

}


class Customer {

    public static void main(String[] args) {

        Banking banking = new Banking();

        Scanner input = new Scanner(System.in);
        System.out.print("Enter the amount to deposit: ");
        double amount = Double.parseDouble(input.nextLine());

        double newTotal = banking.deposit(amount);
        System.out.println("You new total is now: " + newTotal);
    }

}