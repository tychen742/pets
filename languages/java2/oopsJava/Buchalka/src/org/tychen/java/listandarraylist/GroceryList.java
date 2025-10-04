package org.tychen.java.listandarraylist;

import java.util.ArrayList;

public class GroceryList {

    private int[] myNumbers = new int[10];

    private ArrayList<String> groceryList = new ArrayList<>(); // calling constructor because ArrayList is a class.



    public void addGroceryItem(String item) {
        groceryList.add(item);
    }

    public ArrayList<String> getGroceryList() {
        return groceryList;
    }

    public void printGroceryList() {
        System.out.println("You have " + groceryList.size() + " items in your grocery list. ");
        for (int i = 0; i < groceryList.size(); i++) {
            System.out.println((i + 1) + ". " + groceryList.get(i));
        }
    }

    public void modifyGroceryItem(String currentItem, String newItem) { // overloaded
        int position = findItem(newItem);
        if (position >= 0) {
            modifyGroceryItem(position, newItem);
        }
    }
    public void modifyGroceryItem(int position, String newItem) {
        groceryList.set(position, newItem);
        System.out.println("Gorcery item " + (position + 1) + " has been modified.");
    }

    public void removeGroceryItem(String item) {
        int position = findItem(item) ;
        if (position >= 0) {
            removeGroceryItem(position);
        }
    }
    public void removeGroceryItem(int position) {
        String theItem = groceryList.get(position);
        groceryList.remove(position);
    }

    public int findItem(String searchItem) {
        return groceryList.indexOf(searchItem);
    }

    public boolean onFinle(String searchItem) {
        int position = findItem(searchItem);
        return position >= 0;
    }
}


