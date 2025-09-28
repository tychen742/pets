package java18_Thread_2;

import java.util.concurrent.locks.ReentrantLock;

public class PerformSystemCheck implements Runnable {

	private String checkWhat;

	ReentrantLock lock = new ReentrantLock(); // define a new Reentrantlock

	public PerformSystemCheck(String checkWhat) {
		this.checkWhat = checkWhat;
	}

	public void run() { // prevents the run method from being accessed by two
						// different threads at the same time:
						// Reentrantlock & synchronized. Synchronized has huge
						// system cost, so use lock
		lock.lock();
		System.out.println("Checking " + this.checkWhat);
		lock.unlock();
	}

}
