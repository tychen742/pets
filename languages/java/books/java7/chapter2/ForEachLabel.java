package book.java7.chapter2;

public class ForEachLabel {
	@SuppressWarnings("unused")
	public static void main(String[] args) {

		String[][] exams = { { "SCJP", "SCWCD", "SCMAD" }, { "MCSD", "MCAD", "MCDBA" } };

		Outerloop: for (String[] ex : exams) {

			Innerloop: for (String e : ex) {
				System.out.print(e + ", ");
				continue Outerloop;
			}
			break;
		}
		System.out.println();
	}
}
