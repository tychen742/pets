import java.util.Arrays;

//String array

public class Java09_Multi_Array {

	public static void main(String[] args) {

		String[][] multidArray = new String[10][10];

		for (int i = 0; i < multidArray.length; i++) {
			for (int j = 0; j < multidArray[i].length; j++) {
				multidArray[i][j] = i + " " + j;
				// multidArray[i][j] = i + " T " + j;
				// System.out.print("| " + multiArray[i][j]);
			}
			// System.out.println();
		}

		// spit out the multidimensional array
		for (int i = 0; i < multidArray.length; i++) {
			for (int j = 0; j < multidArray[i].length; j++) {
				System.out.print("|" + multidArray[i][j] + "| ");
			}
			System.out.println();
		}

		// System.out.println(multidArray[2][7]);
		System.out.println();

		// use enhanced for loop
		// for (dataType[] varForRow : arrayName)
		for (String[] row : multidArray) {
			for (String column : row) {
				System.out.print("|" + column + "| ");
			}
			System.out.println();
		}
		// ????? print all elements of a multidimensional array
		System.out.println(Arrays.toString(multidArray));

		char[][] boardGame = new char[10][10];
		for (char[] row : boardGame) {
			Arrays.fill(row, '*');
		}

	}
}
