package ch10_Multiple_Thread;

public class GetFood implements Runnable {

	public void run() {
		for (int i = 0; i < 20; i++) {
			System.out.println(i + " Get food...");

			try {
				Thread.sleep(500);
			} catch (InterruptedException e) {
				e.printStackTrace();
			}

		}
	}
}
