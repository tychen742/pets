<<<<<<< HEAD
package ch10_Multiple_Thread;

public class GetMail extends Thread {

	public void run() {
		for (int i = 0; i < 20; i++) {
			System.out.println(i + " Get mail... ");

			try {
				Thread.sleep(500);
			} catch (InterruptedException e) {
				e.printStackTrace();
			}
		}
	}

}
=======
package ch10_Multiple_Thread;

public class GetMail extends Thread {

	public void run() {
		for (int i = 0; i < 20; i++) {
			System.out.println(i + " Get mail... ");

			try {
				Thread.sleep(500);
			} catch (InterruptedException e) {
				e.printStackTrace();
			}
		}
	}

}
>>>>>>> main
