<<<<<<< HEAD
package tutorial17_Threads;

import java.text.DateFormat;
import java.util.Date;
import java.util.Locale;

public class GetTime20 extends Thread {

	public void run() { // public because inherited
		Date rightNow;
		Locale currentLocale;
		DateFormat timeFormatter;
		DateFormat dateFormatter;
		String timeOutput;
		String dateOutput;

		for (int i = 1; i <= 20; i++) {
			rightNow = new Date(); // date object
			currentLocale = new Locale("en");

			timeFormatter = DateFormat.getTimeInstance(DateFormat.DEFAULT, currentLocale);
			dateFormatter = DateFormat.getDateInstance(DateFormat.DEFAULT, currentLocale);

			timeOutput = timeFormatter.format(rightNow);
			dateOutput = dateFormatter.format(rightNow);

			System.out.println(timeOutput);
			System.out.println(dateOutput);

			try {
				Thread.sleep(2000);
			} catch (InterruptedException e) {
				e.printStackTrace();
			}

		}
	}
}
=======
package tutorial17_Threads;

import java.text.DateFormat;
import java.util.Date;
import java.util.Locale;

public class GetTime20 extends Thread {

	public void run() { // public because inherited
		Date rightNow;
		Locale currentLocale;
		DateFormat timeFormatter;
		DateFormat dateFormatter;
		String timeOutput;
		String dateOutput;

		for (int i = 1; i <= 20; i++) {
			rightNow = new Date(); // date object
			currentLocale = new Locale("en");

			timeFormatter = DateFormat.getTimeInstance(DateFormat.DEFAULT, currentLocale);
			dateFormatter = DateFormat.getDateInstance(DateFormat.DEFAULT, currentLocale);

			timeOutput = timeFormatter.format(rightNow);
			dateOutput = dateFormatter.format(rightNow);

			System.out.println(timeOutput);
			System.out.println(dateOutput);

			try {
				Thread.sleep(2000);
			} catch (InterruptedException e) {
				e.printStackTrace();
			}

		}
	}
}
>>>>>>> main
