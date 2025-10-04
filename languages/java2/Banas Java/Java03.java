public class Java03 { // class name = file name
	public static void main(String[] args) {
		int randomNum = (int) (Math.random() * 10 + 1);
		System.out.println("The random number is: " + randomNum);
		/* ***********************************************
		 * Relational Operators > : == : != : >= : <= :
		 * **********************************************
		 */
		// if (randomNum < 25) { // do the () and {} first!!!
		// System.out.println("The number is less than 25");
		// } else { // else and {}
		// System.out.println("The number is NOT less than 25");
		// } // Ctl + / to comment lines
		// Ctl + Shift + F to format

		if (randomNum < 4) { // do the () and {} first!!!
			System.out.println("The number is less than 25.");
		} // Ctl + D to delete line
		else if (randomNum > 7) {
			System.out.println("The number is larger than 7.");
		} 
//		else if (randomNum != 15) {
//			System.out.println("The number is not equal to 15.");
//		} 
		else {
			System.out.println("The number should be between 25 and 40.");
		}
	}
}
