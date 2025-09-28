package ch10_Multiple_Thread;

class MyThread extends Thread {
	int i = 0;
	int m;
	String threadName;

	MyThread(String name, int a) {
		m = a;
		threadName = name;
	}

	public void run() {
		try {
			while (true) {
				i++;
				System.out.println(threadName + " ; print the " + i + "times");
				sleep(m);
				if (i >= 5) {
					break;
				}
			}
		} catch (InterruptedException e) {
			System.out.println("There is an exception. ");
		}
		
	}
}


public class ExtendsThread1 {
	public static void main(String[] args) {
		MyThread obT1 = new MyThread("Thread 1", 500);
		MyThread obT2 = new MyThread("Thread 2", 2000);
		obT1.start();
		obT2.start();
	}

}
