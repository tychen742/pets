package tutorial17_Threads;

public class GetTheMail implements Runnable {

	private int starTime;

	public GetTheMail(int starTime) {
		this.starTime = starTime;
	}

	public void run() {

		try {
			Thread.sleep(starTime * 1000);
		} catch (InterruptedException e) {

		}
		System.out.println("Checking Mail");
	}

}
