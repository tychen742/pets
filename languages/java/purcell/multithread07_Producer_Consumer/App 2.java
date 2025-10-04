<<<<<<< HEAD
package multithread07_Producer_Consumer;

import java.util.Random;
import java.util.concurrent.ArrayBlockingQueue;
// concurrent classes are thread-safe
import java.util.concurrent.BlockingQueue;

public class App {
	private BlockingQueue<Integer> queue = new ArrayBlockingQueue<Integer>(10);
	
	public static void main(String[] args) {
		
	}
	
	private void producer() throws InterruptedException {
		Random random = new Random();
		
		while(true) {
			queue.put(random.nextInt(100));
		}
	}
	
	private void consumer() throws InterruptedException {
		while (true) {
			Thread.sleep(100);
		}
	}
}
=======
package multithread07_Producer_Consumer;

import java.util.Random;
import java.util.concurrent.ArrayBlockingQueue;
// concurrent classes are thread-safe
import java.util.concurrent.BlockingQueue;

public class App {
	private BlockingQueue<Integer> queue = new ArrayBlockingQueue<Integer>(10);
	
	public static void main(String[] args) {
		
	}
	
	private void producer() throws InterruptedException {
		Random random = new Random();
		
		while(true) {
			queue.put(random.nextInt(100));
		}
	}
	
	private void consumer() throws InterruptedException {
		while (true) {
			Thread.sleep(100);
		}
	}
}
>>>>>>> main
