package exam803;

import java.util.Arrays;

public class Q001_Test {

	public static void main(String[] args) {
		Q001_Student bob = new Q001_Student();
		Q001_Student jian = new Q001_Student();
		bob.name = "Bob";
		bob.age = 19;
		jian = bob;
		jian.name = "Jian";
		System.out.println("Bob's name: " + bob.name);

		int[][][] array3D = { { { 0, 1 }, { 2, 3 }, { 4, 5 } } };
		int[][] array = { { 0, 1 }, { 5 } };
		System.out.println(Arrays.toString(array[0]));
		System.out.println(Arrays.toString(array[1]));

		int numerator = 0;
		int denominator = 0;

		try {
			double ans = numerator / denominator;
			System.out.println(ans);

		} catch (ArithmeticException e) {
			System.out.println("Can't do that!");
			System.out.println("Can't do that! " + e.getMessage());
			e.printStackTrace();
			e.printStackTrace(System.out);
		}

	}
}
