package linkedlistexample;

import java.util.LinkedList;
import java.util.ListIterator;

public class LinkedListExample {

    public static void main (String[] args) {
        LinkedList states = new LinkedList();
        states.add("Alaska");
        states.add("Arizon");
        states.add("Arkansas");
        states.add("Connecticut");
        states.add("California");
        states.add("Colorado");

        states.addFirst("Alabama");
        System.out.println(states);

        System.out.println("Last state in list: " + states.getLast());

        ListIterator iterator = states.listIterator(states.size());
        while ((iterator.hasPrevious())) {
            System.out.println(iterator.previous());
        }
    }
}
