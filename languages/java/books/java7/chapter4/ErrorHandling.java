package book.java7.chapter4;

public class ErrorHandling {
	static int numerator = (int) (Math.random() * 100);
	static int[] denominator = { 0, 2, 4 };
	static String answer;

	public static void main(String[] args) {
		// calc(0);
		// System.out.println(numerator + " / " + denominator[1] + " = " +
		// answer);

		calc(1);
		System.out.println(numerator + " / " + denominator[1] + " = " + answer);

		calc(2);
		System.out.println(numerator + " / " + denominator[2] + " = " + answer);

		System.out.println("Calculation completed.");
	}

	public static void calc(int index) {
		double ans = 0;
		ans = numerator / denominator[index];
		answer = String.valueOf(ans);
		answer = "Unable to calculate.";
	}
}
