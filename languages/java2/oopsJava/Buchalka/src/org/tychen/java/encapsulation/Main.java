package org.tychen.java.encapsulation;

public class Main {

    public static void main(String[] args) {
//        Player player = new Player();
//        player.fullName = "Tim";
//        player.health = 20;
//        player.weapon = "Sword";
//
//        int damage = 10;
//        player.loseHealth(damage);
//        System.out.println("Remaining health = " + player.healthRemaining() );
//
//        damage = 11;
//        player.health = 200;
//        player.loseHealth(damage);
//        System.out.println("Remaining health = " + player.healthRemaining());

        EnhancedPlayer player = new EnhancedPlayer("Tim", 500, "Sword");
        System.out.println("Initial health is " + player.getHealth());


        // Printer
        Printer printer = new Printer(20, 100, true);
        printer.setTonerLevel(10);
        System.out.println("Toner level is now: " + printer.getTonerLevel());
        printer.print(1000);
    }

}
