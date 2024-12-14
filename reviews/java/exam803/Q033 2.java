package exam803;

public class Q033 {

	public static void main(String[] args) {
		int x = 2;
		int y = 3;
		int z = 4;

		int j = 0, k = 0;
		
		for (int i = 0; i < 2; i++) {
			do {
				k = 0;
				while (k < 4) {
					k++;
					System.out.print(k + " ");

				}
				System.out.println();

				j++; // j = 3
			} while (j < 3);
			System.out.println("-------");

		}
	}
}                                                        