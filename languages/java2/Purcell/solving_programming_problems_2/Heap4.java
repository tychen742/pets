package solving_programming_problems_2;

import java.util.Arrays;

public class Heap4 {
	private Data5[] theHeap;
	private int itemsInArray = 0;
	private int maxSize;

	public Heap4(int maxSize) {
		this.maxSize = maxSize;
		theHeap = new Data5[maxSize];
	}

	public void insert(int index, Data5 newData) {
		theHeap[index] = newData;
		// itemsInArray++;
	}

	public void incrementTheArray() {
		itemsInArray++;
	}

	public Data5 pop() {
		if (itemsInArray != 0) {
			Data5 root = theHeap[0];
			theHeap[0] = theHeap[--itemsInArray];
			heapTheArray(0);

			return root;
		}
		return null;
	}

	public void printTree(int rows) {
		int spaces = 0;
		int iteration = 1;
		while (iteration <= rows) {
			int indent = (int) Math.abs(((Math.pow(-2, -iteration)) * (-16 + (Math.pow(2, iteration)))));
			int indexToPrint = (int) (.5 * (-2 + (Math.pow(2, iteration))));
			int itemsPerRow = (int) (Math.pow(2, iteration - 1));
			int maxIndexToPrint = indexToPrint + itemsPerRow;

			for (int j = 0; j < indent; j++)
				System.out.print(" ");

			for (int l = indexToPrint; l < maxIndexToPrint; l++) {
				System.out.print(theHeap[l].key);
				for (int k = 0; k < spaces; k++)
					System.out.print(" ");
			}

			spaces = indent;
			iteration++;
			System.out.println();
		}
	}

	// public void insert (int index, Data5 newData) {
	// theHeap[index]
	// }

	public void printTree2(int rows) {
		int spaces = 0;
		int iteration = 1;
		int[] indent = getIndentArray(rows);
		
		while (iteration <= rows) {
			int indexToPrint = (int) (.5 * (-2 + (Math.pow(2, iteration))));
			int itemsPerRow = (int) (Math.pow(2, iteration - 1));
			int maxIndexToPrint = indexToPrint + itemsPerRow;
			for (int j = 0; j < indent[iteration - 1]; j++)
				System.out.print(" ");
			for (int l = indexToPrint; l < maxIndexToPrint; l++) {
				if (l < itemsInArray) {
					System.out.print(String.format("%02d", theHeap[l].key));
					for (int k = 0; k < spaces; k++)
						System.out.print(" ");
				}
			}
			spaces = indent[iteration - 1];
			iteration++;
			System.out.println();
		}
	}

	public int[] getIndentArray(int rows) {
		int[] indentArray = new int[rows];
		for (int i = 0; i < rows; i++) {
			indentArray[i] = (int) Math.abs((-2 + (Math.pow(2, i + 1))));
		}
		Arrays.sort(indentArray);
		indentArray = reverseArray(indentArray);
		return indentArray;
	}

	public int[] reverseArray(int[] theArray) {
		int leftIndex = 0;
		int rightIndex = theArray.length - 1;
		while (leftIndex < rightIndex) {
			int temp = theArray[leftIndex];
			theArray[leftIndex] = theArray[rightIndex];
			theArray[rightIndex] = temp;
			leftIndex++;
			rightIndex--;
		}
		return theArray;
	}

	public void generateFilledArray(int randNum) {
		Data5 randomData1;
		for (int i = 0; i < this.maxSize; i++) {
			randomData1 = new Data5((int) (Math.random() * randNum) + 1);
			this.insert(i, randomData1);
		}
	}

	public void heapTheArray(int index) {
		int largestChild;
		Data5 root = theHeap[index];
		while (index < itemsInArray / 2) {
			int leftChild = 2 * index + 1;
			int rightChild = leftChild + 1;
			if (rightChild < itemsInArray && theHeap[leftChild].key < theHeap[rightChild].key) {
				System.out.println("Put Value " + theHeap[rightChild]
						+ " in largestChild");
				largestChild = rightChild;
			} else {
				System.out.println(" Put Value " + theHeap[leftChild] 
						+ " in largestChild"); 
				largestChild = leftChild;
			}
			if (root.key >= theHeap[largestChild].key)
				break;
			theHeap[index] = theHeap[largestChild];
			index = largestChild;
			printTree2(4);
		}
		theHeap[index] = root;
	}
	
	public void heapSort () {
		for (int k = maxSize - 1; k >= 0; k--) {
			Data5 largestNode = pop();
			insert(k, largestNode);
		}
	}

	public static void main(String[] args) {
		System.out.println("OLD TREE");
		Heap4 newHeap = new Heap4(70);
		newHeap.generateFilledArray(9);
		newHeap.printTree(6);

		System.out.println("\nNEW TREE Heap4_____\n");
		newHeap.printTree2(6);
		System.out.println();
		
		for (int j = newHeap.maxSize / 2-1; j >= 0; j--) {
			newHeap.heapTheArray(j);
		}
		System.out.println("Heaped Array");
		System.out.println(Arrays.toString(newHeap.theHeap));
		
		System.out.println();
		
		newHeap.printTree2(4);
		System.out.println();
		
		newHeap.heapSort();
		System.out.println(Arrays.toString(newHeap.theHeap));

	}
}

class Data5 {
	public int key;

	public Data5(int key) {
		this.key = key;
	}
}
