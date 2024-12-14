import java.util.LinkedList;
import java.util.Queue;

public class Queues {

    public static void main(String[] args) {

        Queue<String> queue = new LinkedList<>();
        // Enqueue items
        queue.add("Sam ");
        queue.add("Anna");
        queue.add("Heidi");
        queue.add("Susan");
        queue.add("Charlotte");
        System.out.println(queue);

        // retrieve
        String nextInQueue = queue.peek();
        System.out.println("Next up: " + nextInQueue);
        System.out.println();

        // remove
        for (int i = 0; i < queue.size(); i++) {
            String recentlyRemoved = queue.remove();
            System.out.println("Recently removed: "+recentlyRemoved);
            System.out.println("The current queue: " + queue);
        }
    }
}
