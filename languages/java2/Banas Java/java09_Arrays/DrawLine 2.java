package java09_Arrays;

public class DrawLine {

	// char dash = '-';
	// int number = 0;

	DrawLine(int number, char dash) {
		int i = 1;
		while (i <= number) {
			System.out.print(dash);
			i++;
		}
	}
	
	public static void Break() {
		System.out.println();
	}

}