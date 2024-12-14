
public class Array_Loop {

	static int[][] multTable = new int[10][10];

	public static void drawTable() {
		for (int i = 1; i < multTable.length; i++) {

			for (int j = 1; j < multTable[i].length; j++) {
				System.out.print(i * j + " ");
			}

			System.out.println();
		}
	}

	public static void main(String[] args) {
		drawTable();
	}
}
