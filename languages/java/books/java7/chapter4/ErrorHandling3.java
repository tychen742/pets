package book.java7.chapter4;

public class ErrorHandling3 {

	static int numerator = 20;
	static int[] denominator = { 0, 2, 4 };
	static String answer;

	public static void main(String[] args) {
		try {
			// for (int element : denominator) {
//			calc(1);
			 calc(0);
			// calc(4);
		} catch (Exception e) {
//			System.out.println("Error message: " + e.getMessage());
			e.printStackTrace();
		}
		System.out.println(numerator + " / " + denominator[0] + " = " + answer);
		System.out.println("Caculation completed.");
	}

	static void calc(int index) throws Exception {
		double ans;
		if ((index == 0) || (index >= denominator.length)) {
			answer = "Unable to compute.";
			throw new Exception("The denominator cannot be " + index);
		}
		ans = numerator / denominator[index];
		answer = String.valueOf(ans);
	}
}
