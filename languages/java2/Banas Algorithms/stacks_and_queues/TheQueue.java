// 03
package stacks_and_queues;

import java.util.Arrays;

public class TheQueue {

	private String[] queueArray;
	private int queueSize;
	private int front, rear, numberOfItems = 0;

	TheQueue(int size) { // Constructor
		queueSize = size;
		queueArray = new String[size];
		Arrays.fill(queueArray, "-1");
	}

	public void insert(String input) {
		if (numberOfItems + 1 <= queueSize) {
			queueArray[rear] = input;
			rear++;
			numberOfItems++;
			System.out.println("INSERT " + input + " was added to Queue.\n");
		} else {
			System.out.println("Sorry but hte queue is full.");
		}
	}

	public void remove() {
		if (numberOfItems > 0) {
			System.out.println("REMOVE " + queueArray[front] + " was removed.\n");
			queueArray[front] = "-1";
			front++;
			numberOfItems--;
		} else {
			System.out.println("Sorry but the queue is empty.");
		}
	}

	public void peek() {
		System.out.println("The first element is " + queueArray[front] + ".");
	}

	public void priorityInsert(String input) {
		int i;
		if (numberOfItems == 0) {
			insert(input);
		} else {
			for (i = numberOfItems-1; i >= 0; i--) {
				if (Integer.parseInt(input) > Integer.parseInt(queueArray[i])) {
					queueArray[i+1] = queueArray[i];
				} else break;
			}
			queueArray[i+1] = input;
			rear++;
			numberOfItems++;
		}
	}

	public static void main(String[] args) {
		TheQueue theQueue = new TheQueue(10);
//		theQueue.insert("10");
//		theQueue.insert("15"); 
//		theQueue.insert("11");

		theQueue.priorityInsert("10");
		theQueue.priorityInsert("15");
		theQueue.priorityInsert("11");
		theQueue.priorityInsert("10");
		theQueue.priorityInsert("15");
		theQueue.priorityInsert("11");

		// theQueue.displayTheQueue();

		theQueue.remove();
		theQueue.peek();

	}

}
