<<<<<<< HEAD
package ch10_Multiple_Thread;

public class Test implements Runnable {

	public void run() {
		for (int x = 0; x < 4; x++) {
			System.out.print(x);
		}
	}

	public static void main(String[] args) throws Exception {
		Thread t = new Thread(new Test());
		t.start();
		System.out.print("Start");
		t.join();
		System.out.print("End");
	}
}
=======
package ch10_Multiple_Thread;

public class Test implements Runnable {

	public void run() {
		for (int x = 0; x < 4; x++) {
			System.out.print(x);
		}
	}

	public static void main(String[] args) throws Exception {
		Thread t = new Thread(new Test());
		t.start();
		System.out.print("Start");
		t.join();
		System.out.print("End");
	}
}
>>>>>>> main
