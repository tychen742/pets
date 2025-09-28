package book.java7.chapter5;

public class ThreadTest2 {

	public static void main(String[] args) {
		HelloThread t1 = new HelloThread();
		//t1.setName("T1");
		System.out.println("Usable thread: " + Thread.activeCount());
		t1.start();
	}
}
