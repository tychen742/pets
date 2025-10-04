
import java.util.LinkedList;

public class LinkedLists {

    public static void main(String[] args) {

        LinkedList<String> students = new LinkedList<>();
        // LinkedList and ArrayList implement List interface.

        // Adding
        students.add("Charlie");
        students.add("Sally");
        students.add("Morgan");
        students.add("Taylor");
        students.add("Jamie");

        students.addFirst("Sarah");
        students.addLast("Hailey");
        students.add(2, "Tara");

        // Retrieving
        String firstStudent = students.getFirst();
        System.out.println("First: " + firstStudent);
        String lastStudent = students.getLast();
        System.out.println("Last :" + lastStudent);
        System.out.println("Number of list elements: " + students.size());
        System.out.println(students);
        System.out.println("The 0th student is: " + students.get(0));
        System.out.println("The index of Sarah is: " + students.indexOf("Sarah"));

        boolean hasSally = students.contains("Sally");
        System.out.println("students list contains Sally: " + hasSally);

        // Remove
        students.removeFirst();
        students.removeLast();
        students.remove("Hailey");
        students.remove(1);
        System.out.println(students);
        students.clear();
        System.out.println(students);
        //
    }
}
