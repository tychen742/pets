<<<<<<< HEAD
package book.java7.chapter5;

// must EXTENDS Thread
public class HelloThread extends Thread {
	public void run() {
		for (int i = 1; i <= 1000; i ++) {
			String tName = Thread.currentThread().getName();
			System.out.println(tName + " : " + i);
		}
	}
	
}
=======
package book.java7.chapter5;

// must EXTENDS Thread
public class HelloThread extends Thread {
	public void run() {
		for (int i = 1; i <= 1000; i ++) {
			String tName = Thread.currentThread().getName();
			System.out.println(tName + " : " + i);
		}
	}
	
}
>>>>>>> main
