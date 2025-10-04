package book.java7.chapter2;

public class SwitchBreakAndContinue {
	public static void main(String[] args) {

		for (int i = 0; i <= 10; i++) {
			if (i == 8) {
				break;
			}
			if (i % 3 == 0) {
				continue;
			}
			System.out.print(i + "\t");
		}

	}
}
