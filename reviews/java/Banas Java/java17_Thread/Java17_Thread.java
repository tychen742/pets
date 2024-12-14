package java17_Thread;

//There are two different threads here: GetTheMail & GetTime20

// thread: a block of code, notifying the Java interpreter not only is it is
// going to run, but other threads (blocks of codes) are going to run at the
// same time.

public class Java17_Thread {
	public static void main(String[] args) {

		Thread getTime = new GetTime20(); // call Thread
		Runnable getMail1 = new GetTheMail(5);
		Runnable getMail2 = new GetTheMail(10);
		Runnable getMail3 = new GetTheMail(15);

		getTime.start();

		new Thread(getMail1).start(); // call start for Runnable interace
		new Thread(getMail2).start();
		new Thread(getMail3).start();

	}
}