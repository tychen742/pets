import java.util.regex.*;

public class Jav19 {
	public static void main(String[] args) {
		String longString = "Polo Chen TW CA AK  (614)570-5766 1-740-555-5555 0939869606 polochen@msn.com +886-3-265-5405 why 5555 ";
		@SuppressWarnings("unused")
		String strangeString = "1Z aaaa **** *** {{{ {{ {";

		// [ ] ; // put into the box what you want to search
		// {} the length of the characters
		// A word that is 2 to 20 characters in length
		// [A-Za-z] {2, 20} \\w{2, 20}

		// regexChecker("\\s[A-Za-z]{2,20}\\s", longString);
		// regexChecker("\\s\\d{5}\\s", longString); //zip code

		// looking for 2 characters that starts with C or A
		// A[KLRZ] | C[AOT]
		// regexChecker("A[KLRZ]|C[AOT]|T[\\S]", longString);
		//
		// regexChecker("{3,}", longString);
		// needs backslashed {5,} //+ //.^*?{}[]\|()

		// regexChecker("(\\S{4,}\\s)", strangeString);
		// regexChecker("(\\{{1,})", strangeString); // one or more {
		// regexChecker(".{3}", strangeString);
		// regexChecker("\\w", longString); // word type character: \\w =
		// [A-Za-z0-9]
		// regexChecker("\\W", longString);
		// regexChecker("\\w*", longString);
		// regexChecker("[A-Za-z0-9._%-]+@[A-Za-z0-9._-]+\\.[A-Za-z]{2,4}",
		// longString); // +: one of those before
		// regexChecker("([0-9]( |-)?)?(\\(?[0-9]{3}\\)?|[0-9]{3})( |-)?([0-9]{3}( |-)?[0-9]{4}|[a-zA-Z0-9]{7})",
		// longString); }
		regexReplace(longString);
	}

	public static void regexChecker(String theRegex, String str2Check) {
		Pattern checkRegex = Pattern.compile(theRegex);
		Matcher regexMatcher = checkRegex.matcher(str2Check);

		while (regexMatcher.find()) {
			if (regexMatcher.group().length() != 0) {
				System.out.println(regexMatcher.group().trim());
			}
			// System.out.println("Start index: " + regexMatcher.start());
			// System.out.println("End index: " + regexMatcher.end());

		}
	}

	public static void regexReplace(String str2Replace) {
		Pattern replace = Pattern.compile("\\s+"); // \\s: space; +: one or more
		// Pattern replace = Pattern.compile("[A-Z]+",
		// Pattern.CASE_INSENSITIVE); // = [A-Za-z]
		Matcher regexMatcher = replace.matcher(str2Replace.trim());
		System.out.println(regexMatcher.replaceAll(", "));
	}

}
