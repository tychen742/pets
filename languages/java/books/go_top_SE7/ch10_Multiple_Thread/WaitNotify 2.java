<<<<<<< HEAD
package ch10_Multiple_Thread;

class Frisbee {
	private boolean isThrow = false;

	public synchronized void throwF(int tNo) {
		while (isThrow) {
			try {
				wait();
			} catch (InterruptedException e) {
			}
		}
		System.out.println("Throw the number " + tNo + " frosbee.");
		isThrow = true;
		notify();
	}

	public synchronized void accessF(int aNo) {
		while (!isThrow)
			try {
				wait();
			} catch (InterruptedException e) {

			}
		System.out.println("Caught frisbee number " + aNo + ".");
		isThrow = false;
		notify();
	}
}

class ThrowFrisbee implements Runnable {
	Frisbee frisbee;
	ThrowFrisbee(Frisbee frisbee) {
		this.frisbee = frisbee;
	}

	public void run() {
		for (int i = 1; i <= 5; i++) {
			frisbee.throwF(i);
		}
	}
}

class AccessFrisbee implements Runnable {
	Frisbee frisbee;

	AccessFrisbee(Frisbee frisbee) {
		this.frisbee = frisbee;
	}

	public void run() {
		for (int i = 1; i <= 5; i++) {
			frisbee.accessF(i);
		}
	}
}

public class WaitNotify {
	public static void main(String[] args) {
		Frisbee frisbee = new Frisbee();
		Thread master = new Thread(new ThrowFrisbee(frisbee));
		Thread dog = new Thread(new AccessFrisbee(frisbee));
		master.start();
		dog.start();
	}
=======
package ch10_Multiple_Thread;

class Frisbee {
	private boolean isThrow = false;

	public synchronized void throwF(int tNo) {
		while (isThrow) {
			try {
				wait();
			} catch (InterruptedException e) {
			}
		}
		System.out.println("Throw the number " + tNo + " frosbee.");
		isThrow = true;
		notify();
	}

	public synchronized void accessF(int aNo) {
		while (!isThrow)
			try {
				wait();
			} catch (InterruptedException e) {

			}
		System.out.println("Caught frisbee number " + aNo + ".");
		isThrow = false;
		notify();
	}
}

class ThrowFrisbee implements Runnable {
	Frisbee frisbee;
	ThrowFrisbee(Frisbee frisbee) {
		this.frisbee = frisbee;
	}

	public void run() {
		for (int i = 1; i <= 5; i++) {
			frisbee.throwF(i);
		}
	}
}

class AccessFrisbee implements Runnable {
	Frisbee frisbee;

	AccessFrisbee(Frisbee frisbee) {
		this.frisbee = frisbee;
	}

	public void run() {
		for (int i = 1; i <= 5; i++) {
			frisbee.accessF(i);
		}
	}
}

public class WaitNotify {
	public static void main(String[] args) {
		Frisbee frisbee = new Frisbee();
		Thread master = new Thread(new ThrowFrisbee(frisbee));
		Thread dog = new Thread(new AccessFrisbee(frisbee));
		master.start();
		dog.start();
	}
>>>>>>> main
}