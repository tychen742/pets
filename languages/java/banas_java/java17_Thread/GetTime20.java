package java17_Thread;

import java.util.*;
import java.text.DateFormat;

public class GetTime20 extends Thread { // GetTime20 is a subclass of Thread
	public static final String timeOutput = null;

	// class
	// You can only extend one class
	// thread code in run()
	public void run() { // all codes the threads execute must be inside the
						// "RUN" method
		Date rightNow;
		Locale currentLocale = new Locale("en");
		DateFormat timeFormatter;
		DateFormat dateFormatter;
		String timeOutput;
		String dateOutput;

		for (int i = 1; i <= 10; i++) {
			rightNow = new Date();
			currentLocale = new Locale("en");
			timeFormatter = DateFormat.getTimeInstance(DateFormat.DEFAULT,
					currentLocale);
			dateFormatter = DateFormat.getDateInstance(DateFormat.DEFAULT,
					currentLocale);

			timeOutput = timeFormatter.format(rightNow);
			dateOutput = dateFormatter.format(rightNow);

			System.out.print(timeOutput + " ");
			System.out.println(dateOutput);
			// System.out.println();

			try {
				Thread.sleep(2000);
			} catch (InterruptedException e) {
			}
		}

	}

}
