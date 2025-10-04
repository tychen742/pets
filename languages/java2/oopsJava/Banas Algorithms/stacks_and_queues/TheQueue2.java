package stacks_and_queues;

import java.util.Arrays;

public class TheQueue2 {

	private String[] queueArray;
	private int queueSize;
	private int front, rear, numberOfItems = 0;

	TheQueue2(int size) {
		queueSize = size;
		queueArray = new String[size];
		Arrays.fill(queueArray, "-1");
	}

	public void insert(String input) {
		if (numberOfItems + 1 <= queueSize) {
			queueArray[rear] = input;
			rear++;
			numberOfItems++;
			System.out.println("INSERT" + input + " was inserted.");
		} else {
			System.out.println("Sorry but the queue is full.");
		}
	}
	
	public void priorityInsert (String input) {
		int i;
		if (numberOfItems == 0) {
			insert (input);
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

	public void remove() {
		if (numberOfItems > 0) {
			System.out.println("REMOVE " + queueArray[front] + " was removed.");
			queueArray[front] = "-1";
			front++;
			numberOfItems--;
		} else {
			System.out.println("Sorry but the queue is empty.");
		}
	}

	public void peek() {
		System.out.println("The first element is " + queueArray[front]);
	}

	public static void main(String[] args) {
		TheQueue2 theQueue = new TheQueue2(10);
		theQueue.insert("15");
		theQueue.insert("10");
		theQueue.insert("11");
		theQueue.displayTheQueue();

		theQueue.remove();
		theQueue.displayTheQueue();
		
		theQueue.peek();
		
		theQueue.priorityInsert("10");
		theQueue.priorityInsert("20");
		theQueue.priorityInsert("30");
		theQueue.priorityInsert("25");
		theQueue.displayTheQueue();
	}

	public void displayTheQueue() {
		System.out.println("------------------------------------------");

		for (int i = 0; i < queueSize; i++)
			System.out.format("|%3s " + "", i);
		System.out.println(" |");
		for (int j = 0; j < queueSize; j++)
			if (queueArray[j].equals("-1"))
				System.out.print("|  ");
			else
				System.out.format("|%3s" + "  ", queueArray[j]);
		System.out.println(" |");

		System.out.println("------------------------------------------");
	}

}
