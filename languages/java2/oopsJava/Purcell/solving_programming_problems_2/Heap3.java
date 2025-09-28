package solving_programming_problems_2;

import java.util.Arrays;

public class Heap3 {
	private Data4[] theHeap;
	private int itemsInArray = 0;
	private int maxSize;

	public Heap3(int maxSize) {
		this.maxSize = maxSize;
		theHeap = new Data4[maxSize];
	}

	public static void main(String[] args) {
		System.out.println("OLD TREE");
		Heap3 newHeap = new Heap3(70);
		newHeap.generateFilledArray(9);
		newHeap.printTree(6);

		System.out.println("\nNEW TREE Heap3_____\n");
		newHeap.printTree2(6);

	}

	public void insert(int index, Data4 newData) {
		theHeap[index] = newData;
		itemsInArray++;
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
		Data4 randomData1;
		for (int i = 0; i < this.maxSize; i++) {
			randomData1 = new Data4((int) (Math.random() * randNum) + 1);
			this.insert(i, randomData1);
		}
	}

}

class Data4 {
	public int key;

	public Data4(int key) {
		this.key = key;
	}
}
