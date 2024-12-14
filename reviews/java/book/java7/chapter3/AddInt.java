package book.java7.chapter3;

public class AddInt {

	public int newCalc(int... c) {
		int sum = 0;
		for (int i : c) {
			sum += 1;
		}
		System.out.println(sum);
		return sum;
	}
	public static void main(String[] args) {
		AddInt ai = new AddInt();
		int a = ai.newCalc(1, 2, 3);
		int b = ai.newCalc(1, 2, 3, 4, 5);
		int c = ai.newCalc(a, b);
		System.out.println(c);
	}
}
