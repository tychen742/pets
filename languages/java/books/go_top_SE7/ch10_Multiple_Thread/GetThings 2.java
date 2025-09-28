<<<<<<< HEAD
package ch10_Multiple_Thread;

public class GetThings {
	public static void main(String[] args) {

		Thread getMail = new GetMail();
		Runnable getFood = new GetFood();
		Thread getFood2 = new Thread(new GetFood());
		getMail.start();
//		new Thread(getFood).start();
		getFood2.start();
		
	}
}
=======
package ch10_Multiple_Thread;

public class GetThings {
	public static void main(String[] args) {

		Thread getMail = new GetMail();
		Runnable getFood = new GetFood();
		Thread getFood2 = new Thread(new GetFood());
		getMail.start();
//		new Thread(getFood).start();
		getFood2.start();
		
	}
}
>>>>>>> main
