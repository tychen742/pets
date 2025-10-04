package exam803;

public class Q104 {

	public static void main(String[] args) {

		int i = 25;
		// int j = i++ + 1;
		i++;
		i++;
		System.out.println(i);
		i++;
		int j = i++;
		System.out.println("i = " + i);
		System.out.println("j = " + j);
		
		// if (j % 5 == 0) {
		// System.out.println(j + " is divisble by 5");
		// } else {
		// System.out.println(j + " is not divisible by 5");
		// }
		// System.out.println("Done");

	}

}
