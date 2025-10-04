package book.java7.chapter5;
class FatherThread implements Runnable {
	public void run() {
		System.out.println("Daddy is home.");
		System.out.println("Daday is ready for shower.");
		System.out.println("Daddy finds the propane is out.");
		System.out.println("Daddy calls the propare worker.");
		Thread worker = new Thread(new WorkerThread());
		System.out.println("Daddy waits for propane worker.");
		worker.start();
		// Thread.yield(); // pausing the FatherTHread; not working
		/*try {
			Thread.sleep(6000);
		} catch (InterruptedException ie) {
			System.out.println("Daddy decides not to take a hot shower.");
		}*/ // needs to know the time of sleep		
		try {
			worker.join();
		} catch (InterruptedException e) {
			System.out.println("Daddy decides not to take a hot shower.");
		}
		System.out.println("Daddy is done showering.");
	}
}

class WorkerThread implements Runnable {
	public void run() {
		System.out.println();
		System.out.println("Propane worker delivering propane bottle...");
		try {
			for (int i = 1; i <= 5; i++) {
				Thread.sleep(1000);
				System.out.println(i + " minutes");
			}
		} catch (InterruptedException ie) {
			System.out.println("The propane deliverman has a car accident.");
		}
		
		System.out.println();
		System.out.println("The deliverman delivers the propane.");
		System.out.println("The deliverman installs the propane.");
		System.out.println();
	}
}

public class Shower {
	public static void main (String[] args) {
		Thread father = new Thread(new FatherThread());
		father.start();
	}
}