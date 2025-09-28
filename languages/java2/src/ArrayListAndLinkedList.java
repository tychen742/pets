import java.util.ArrayList;
import java.util.Arrays;
import java.util.Iterator;
import java.util.LinkedList;

public class ArrayListAndLinkedList {

    public static void main(String[] args){

        // ArrayList
        ArrayList<String> arrayListStr1 = new ArrayList<String>(5);
        arrayListStr1.add("Smith");
        arrayListStr1.add("Obama");
        arrayListStr1.add("Trump");
        System.out.println(arrayListStr1);

        ArrayList<Integer> arrListInt1 = new ArrayList<Integer>(Arrays.asList(1, 2, 3, 4, 5));
        arrListInt1.forEach(item -> System.out.println("item: " + item)); // foreach for loop
        arrListInt1.forEach(item -> System.out.print("item: " + item + " ")); // foreach for loop
        System.out.println();

        arrListInt1.set(0, 100);
        arrListInt1.forEach(item -> System.out.print("item: " + item + " ")); // foreach for loop
        System.out.println();
        arrListInt1.remove(4);
        arrListInt1.forEach(item -> System.out.print("item: " + item + " ")); // foreach for loop
        System.out.println();
//        arrListInt1.clear();
//        arrListInt1.forEach(item -> System.out.print("item: " + item + " ,")); // foreach for loop

        // Interator
        Iterator it = arrayListStr1.iterator();
        while (it.hasNext()) {
            System.out.print(it.next() + " ");
        }
        System.out.println();

        Iterator it2 = arrListInt1.iterator();
        while (it2.hasNext()) {
            System.out.print(it2.next() + " ");
        }

        // LinkedList
        LinkedList<Integer> linkedList = new LinkedList<Integer>();
        linkedList.add(1);
        linkedList.add(2);
        System.out.println(linkedList);
        linkedList.addAll(Arrays.asList(3, 4, 5));
        System.out.println(linkedList);
        linkedList.addFirst(0);
        System.out.println(linkedList);
        linkedList.addLast(6);
        System.out.println(linkedList);
        System.out.println(linkedList.contains(4));
        System.out.println(linkedList.indexOf(6));
        linkedList.set(0, 9);
        System.out.println(linkedList);
        System.out.println(linkedList.get(0));
        linkedList.remove(0);
        System.out.println(linkedList);
        System.out.println(linkedList.size());

        Object[] toArray = linkedList.toArray();
        for ( Object item : toArray) {
            System.out.println(item);
        }
    }
}
