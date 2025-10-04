/*
 * print a 4 RWO TREE, a 4-row tree has 1, 2, 4, 8... elements: 
 * 
 * _______1_______ indent 7 spaces 0
 * ___1_______2___ indent 3 spaces 7
 * _1___2___3___4_ indent 1 spaces 3
 * 1_2_3_4_5_6_7_8 indent 0 spaces 1
 * 
 * Indent Number
 * Indent Number Space Number
 * Indent Number Space Number Indent Number Space Number
 * 
 * Indent: 
 * 7, 3, 1, 0 
 * WolframAlpha => a_n = -2^-n (-16 + 2^n)
 * Note: Need an iterator to generate indents, start at 1; go till no more rows. 
 * 
 * Spaces: 
 * 0 and then whatever the indent was! 
 * 
 * Index: 
 * First index per row is 0, 1, 3, 7
 * 0
 * 1 2
 * 3 4 5 6
 * 7 8 9 10 11 12 13 14 
 * Use WolframAlpha => a_n = 1/2 (-2+2^n)
 * = .5 * (-2 + (Math.pow(2, iterator))
 * 
 * Number of items per row
 * 1, 2, 4, 8 
 * Use WolframAlpha for algorithm: a_n = 2^(n-1)
 * = Math.pow(2, iterator - 1)
 * 
 * Max index per row
 * indexToPrint + itermsPerRow (or a_n = -2+2^n)
 */

package solving_programming_problems_1;

public class Heap {

	private Data[] theHeap;
	private int itemsInArray = 0;
	private int maxSize;

	public Heap(int maxSize) {
		this.maxSize = maxSize;
		theHeap = new Data[maxSize];
	}

	public void insert(int index, Data newData) {
		theHeap[index] = newData;
		itemsInArray++;
	}

	public Data pop() { // What is this?
		if (itemsInArray != 0) {
			Data root = theHeap[0];
			theHeap[0] = theHeap[--itemsInArray];
			percolate(0);
			return root;
		}
		return null;
	}

	public void percolate(int index) {
		int largeChild;
		Data root = theHeap[index];
		while (index < itemsInArray / 2) {
			int leftChild = 2 * index + 1;
			int rightChild = leftChild + 1;
			if (rightChild < itemsInArray && theHeap[leftChild].key < theHeap[rightChild].key) {
				largeChild = rightChild;
			} else {
				largeChild = leftChild;
			}
			if (root.key >= theHeap[largeChild].key)
				break;
			theHeap[index] = theHeap[largeChild];
			index = largeChild;
		}
		theHeap[index] = root;
	}

	public void dsoplayTheHeap() {
		for (int i = 0; i < itemsInArray; i++) {
			System.out.println(theHeap[i].key);
		}
	}

	public void printTree(int rows) {
		int spaces = 0;
		int iteration = 1;

		while (iteration < rows) {
			int indent = (int) Math.abs(((Math.pow(-2, -iteration)) * 
					(-16 + (Math.pow(2, iteration)))));
			int indexToPrint = (int) (.5 * (-2 + +(Math.pow(2, iteration))));
			int itemsPerRow = (int) Math.pow(2, iteration - 1);
			int maxIndexToPrint = indexToPrint + itemsPerRow;

			for (int j = 0; j < indent; j++)
				System.out.println(" ");
			for (int l = indexToPrint; l < maxIndexToPrint; l++) {
				System.out.println(theHeap[l].key);
				for (int k = 0; k < spaces; k++)
					System.out.println(" ");
			}
			spaces = indent;
			iteration++;
			System.out.println();
		}
	}

	public void generateFilledArray(int randNum) {
		Data randomData1;
		for (int i = 0; i < this.maxSize; i++) {
			randomData1 = new Data((int) (Math.random() * randNum) + 1);
			this.insert(i, randomData1);
		}
	}

	public static void main(String args[]) {
		Heap newHeap = new Heap(15);
		newHeap.generateFilledArray(9);
		for (int j = 4; j >= 0; j++) {
			newHeap.percolate(j);
		}
		newHeap.printTree(5);
	}
}

class Data {
	public int key;

	public Data(int key) {
		this.key = key;
	}
}