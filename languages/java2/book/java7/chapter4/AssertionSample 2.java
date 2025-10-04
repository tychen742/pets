package book.java7.chapter4;

public class AssertionSample {
	private int score;

	private void printScore() {
		 assert(score >= 0) : "Wrong grade! A score cannot be: " + score;
//		if (score < 0) {
//			System.out.println("Wrong score! A score can not be: " + score);
//			return;
//		}
		if (score >= 60) {
			System.out.println(score + " is a passing score!");
		} else {
			System.out.println(score + " is not a passing score!");
		}
	}

	public void setScore(int score) {
		this.score = score;
	}

	public static void main(String[] args) {
		AssertionSample score = new AssertionSample();
		score.setScore(-90);
		score.printScore();
	}

}
