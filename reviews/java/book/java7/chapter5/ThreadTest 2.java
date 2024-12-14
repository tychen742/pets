package book.java7.chapter5;

public class ThreadTest {
	static String test(String text) {
//		return text;
		System.out.println(text);
		return text;
	}

	public static void main(String[] args) {
		String ttt = "tttttt";
		test(ttt);
		String tName = Thread.currentThread().getName();
		int tActive = Thread.activeCount();

		System.out.println("Running thread is: " + tName);
		System.out.println("Number of available threads: " + tActive);
	}

}
