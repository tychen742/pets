package part35_RunTime_Exceptions;
// Two basic kinds of Exceptions in Java: Runtime & Checked 

// Runtime exceptions are basic, serious problems; will break program.

// When you have Runtime Exceptions, you fix the program rather than handle the exeptions.

public class App {
	public static void main(String[] args) {

		///// Checked Exception
		/*
		 * try { Thread.sleep(1000); } catch (InterruptedException e) {
		 * e.printStackTrace(); }
		 */

		///// Runtime: Divide by Zero
		/*
		 * int value = 7; value = value / 0;
		 */

		///// Runtime: Null Pointer
		/*
		 * String text1 = null; System.out.println(text1.length());
		 */

		///// Runtime: ArrayIndexOutOfBound

		try {
			String[] text2 = { "one", "two", "three" };
			System.out.println(text2[3]);
			// } catch (Exception e) {
			// } catch (RuntimeException e) {
		} catch (ArrayIndexOutOfBoundsException e) {
			System.out.println(e.getMessage());
			System.out.println(e.toString());
		}

	}
}
