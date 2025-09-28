<<<<<<< HEAD
package tutorial18_Threads;

import java.text.DateFormat;
import java.util.Date;
import java.util.Locale;

public class CheckSystemTime implements Runnable {

	public void run() {

		Date rightNow;
		Locale currentLocale;
		DateFormat timeFormatter;
		String timeOutput;
		
		rightNow = new Date();
		currentLocale = new Locale("en");
		
		timeFormatter = DateFormat.getTimeInstance(DateFormat.DEFAULT, currentLocale);
		timeOutput = timeFormatter.format(rightNow); // make it String
		
		System.out.println("Time: " + timeOutput);
	}

	
	
	
}
=======
package tutorial18_Threads;

import java.text.DateFormat;
import java.util.Date;
import java.util.Locale;

public class CheckSystemTime implements Runnable {

	public void run() {

		Date rightNow;
		Locale currentLocale;
		DateFormat timeFormatter;
		String timeOutput;
		
		rightNow = new Date();
		currentLocale = new Locale("en");
		
		timeFormatter = DateFormat.getTimeInstance(DateFormat.DEFAULT, currentLocale);
		timeOutput = timeFormatter.format(rightNow); // make it String
		
		System.out.println("Time: " + timeOutput);
	}

	
	
	
}
>>>>>>> main
