

public class Array_Mult_Table {

	static char[][] multTable = new char[10][10];
	// static int[][] multTable = new int[10][10];

	public static void drawTable() {
		for (int i = 1; i < multTable.length; i++) {
			// for (int i = 1; i < 10; i++) {

			for (int j = 1; j < multTable[i].length; j++) {
				// for (int j = 1; j < 10; j++) {
				System.out.print(i * j + " ");
			}

			System.out.println();
		}
	}

	public static void main(String[] args) {
		drawTable();
	}
}
