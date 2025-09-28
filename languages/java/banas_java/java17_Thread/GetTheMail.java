package java17_Thread;

public class GetTheMail implements Runnable {
	// implementing the interface Runnable because ...
	
	private int startTime;

	public GetTheMail(int startTime) {
		this.startTime = startTime;
	}

	public void run() { // all codes the threads execute must be inside the
						// "RUN" method
		try {
			Thread.sleep(startTime * 1000);
		} catch (InterruptedException e) {
		}
		System.out.println("Checking mail.");
	}
}
