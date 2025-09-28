// array method

public class Java09_Array_Method {

	private static void array_Method() {
		int[] randomArray;
		int[] numberArray = new int[10];
		randomArray = new int[20];
		randomArray[1] = 2;

		@SuppressWarnings("unused")
		String[] stringArray = { "just", "random", "words" };

		for (int i = 0; i < numberArray.length; i++) {
			numberArray[i] = i;
		}

		int k = 1;
		while (k <= 41) {
			System.out.print('-');
			k++;
		}
		System.out.println();

		for (int j = 0; j < numberArray.length; j++) {
			System.out.print("| " + numberArray[j] + " ");
		}
		System.out.println('|');
	}

	public static void main(String[] args) {
		array_Method();

	}
}
