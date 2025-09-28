package org.tychen.java.listandarraylist;

import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    private static Scanner scanner = new Scanner(System.in);
    private static GroceryList grocryList = new GroceryList();

    public static void main(String[] args) {
        boolean quit = false;
        int choice = 0;
        printInstructions();
        while (!quit) {
            System.out.print("Enter your choice: ");
            choice = scanner.nextInt();
            scanner.nextLine();

            switch (choice) {
                case 0:
                    printInstructions();
                    break;
                case 1:
                    grocryList.printGroceryList();
                    break;
                case 2:
                    addItem();
                    break;
                case 3:
                    modifyItem();
                    break;
                case 4:
                    removeItem();
                    break;
                case 5:
                    searchForItem();
                    break;
                case 6:
                    quit = true;
                    break;
            }
        }
    }

    public static void printInstructions() {
        System.out.println("\n Press ");
        System.out.println("\t 0 - to print choie options.");
        System.out.println("\t 1 - to print the list of grocery items.");
        System.out.println("\t 2 - to add an item to the list.");
        System.out.println("\t 3 - to modify an item in the list. ");
        System.out.println("\t 4 - to remove an item from the list. ");
        System.out.println("\t 5 - to search for an item in the list. ");
        System.out.println("\t 6 - to quit the application. ");
    }

    public static void addItem() {
        System.out.print("Please enter the grocery item: ");
        grocryList.addGroceryItem(scanner.nextLine());
    }

    public static void modifyItem() {
        System.out.println("Current item name: ");
        String itemNow = scanner.nextLine();
        scanner.nextLine();
        System.out.print("Enter replacement item name: ");
        String newItem = scanner.nextLine();
        grocryList.modifyGroceryItem(itemNow, newItem);
    }

    public static void removeItem() {
        System.out.println("Please enter the item number to remove: ");
        int itemNo = scanner.nextInt();
        scanner.next();
        grocryList.removeGroceryItem(itemNo - 1);
    }

    public static void searchForItem() {
        System.out.println("Please enter the item name to search: ");
        String itemName = scanner.nextLine();
        scanner.next();
        if (grocryList.findItem(itemName) >= 0) {
            System.out.println("Found " + itemName + " in the grocery list!");
        } else {
            System.out.println(itemName + " is not in the shopping list. ");
        }
    }

    public static void processArrayList() {
        ArrayList<String> newArray = new ArrayList<>();

        // Copying array
        newArray.addAll(grocryList.getGroceryList());
        ArrayList<String> nextArray = new ArrayList<String>(grocryList.getGroceryList());

        String[] myArray = new String[grocryList.getGroceryList().size()];
        myArray = grocryList.getGroceryList().toArray(myArray);
        System.out.println(myArray.toString());
    }

}
