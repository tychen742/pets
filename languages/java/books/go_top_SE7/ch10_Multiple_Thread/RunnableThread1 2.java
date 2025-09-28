<<<<<<< HEAD
package ch10_Multiple_Thread;

class MyThread2 implements Runnable {
	int m;

	MyThread2(int a) {
		m = a;
	}

	public void run() {
		for (int i = 1; i <= m; i++) {
			System.out.println(Thread.currentThread().getName() + " = " + i);
		}
	}

}

public class RunnableThread1 {
	public static void main(String[] args) {
		MyThread2 obR1 = new MyThread2(100);
		MyThread2 obR2 = new MyThread2(50);
		
		Thread obT1 = new Thread(obR1, "Thread 1");
		Thread obT2 = new Thread(obR2, "Thread 2");
		
		obT1.start();
		obT2.start();
	}
}
=======
package ch10_Multiple_Thread;

class MyThread2 implements Runnable {
	int m;

	MyThread2(int a) {
		m = a;
	}

	public void run() {
		for (int i = 1; i <= m; i++) {
			System.out.println(Thread.currentThread().getName() + " = " + i);
		}
	}

}

public class RunnableThread1 {
	public static void main(String[] args) {
		MyThread2 obR1 = new MyThread2(100);
		MyThread2 obR2 = new MyThread2(50);
		
		Thread obT1 = new Thread(obR1, "Thread 1");
		Thread obT2 = new Thread(obR2, "Thread 2");
		
		obT1.start();
		obT2.start();
	}
}
>>>>>>> main
