package stacks_and_queues;

import java.util.Arrays;

public class TheStack2 {

	private String[] stackArray;
	private int stackSize;
	private int topOfStack = -1;

	TheStack2(int size) {

		stackSize = size;
		stackArray = new String[size];
		Arrays.fill(stackArray, "-1");
	}

	public void push(String input) {
		if (topOfStack + 1 < stackSize) {
			topOfStack++;
			stackArray[topOfStack] = input;
		} else
			System.out.println("Sorry but hte stack is full.");
		displayTheStack();
		System.out.println("PUSH " + input + " was added to the stack.");
	}

	public void pushMany(String multipleValues) {
		String[] tempString = multipleValues.split(",");
		for (int i = 0; i < tempString.length; i++) {
			push(tempString[i]);
		}
	}

	public String pop() {
		if (topOfStack >= 0) {
			displayTheStack();
			System.out.println("POP " + stackArray[topOfStack] + " was removed from stack.");
			stackArray[topOfStack] = "-1";
			return stackArray[topOfStack--];
		} else {
			displayTheStack();
			System.out.println("Sorry but the statck is empty.");
			return "-1";
		}
	}

	public void popAll() {
		for (int i = topOfStack; i >= 0; i--) {
			pop();
		}
	}

	public String peek() {
		System.out.println("PEEK " + stackArray[topOfStack] + " is at the top of the array");
		return stackArray[topOfStack];
	}

	public static void main(String[] args) {
		TheStack2 theStack = new TheStack2(10);
		theStack.push("10");
		theStack.push("15");
		theStack.peek();
		// theStack.pop();
		// theStack.displayTheStack();
		theStack.pushMany("12, 22, 23");
		theStack.popAll();
		theStack.displayTheStack();
	}

	public void displayTheStack() {
		System.out.println("------------------------------------------");

		for (int i = 0; i < stackSize; i++)
			System.out.format("|%3s " + "", i);
		System.out.println(" |");
		for (int j = 0; j < stackSize; j++)
			if (stackArray[j].equals("-1")) 
				System.out.print("|   ");
			else 
				System.out.format("|%3s" + "  ", stackArray[j]);
		System.out.println(" |");

		System.out.println("------------------------------------------");
	}
}
