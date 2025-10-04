<<<<<<< HEAD
package tutorial18_Threads;

import java.util.concurrent.locks.ReentrantLock;

public class PerformSystemCheck implements Runnable {

	private String checkWhat;

	ReentrantLock lock = new ReentrantLock();

	public PerformSystemCheck(String checkWhat) {
		this.checkWhat = checkWhat;
	}

	// synchronized public void run() { // synch: when accessed, the method will
	// be
	// lock down
	public void run() {
		lock.lock();
		System.out.println("Checking " + this.checkWhat);
		lock.unlock();
	}

}
=======
package tutorial18_Threads;

import java.util.concurrent.locks.ReentrantLock;

public class PerformSystemCheck implements Runnable {

	private String checkWhat;

	ReentrantLock lock = new ReentrantLock();

	public PerformSystemCheck(String checkWhat) {
		this.checkWhat = checkWhat;
	}

	// synchronized public void run() { // synch: when accessed, the method will
	// be
	// lock down
	public void run() {
		lock.lock();
		System.out.println("Checking " + this.checkWhat);
		lock.unlock();
	}

}
>>>>>>> main
