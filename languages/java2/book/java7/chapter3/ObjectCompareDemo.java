package book.java7.chapter3;
import java.util.Comparator;
import java.util.Objects;

class Score {
	private String subject;
	private int score;
	Score(String subjet, int score) {
		this.subject = subject;
		this.score = score;
	}
	int getScore() {
		return score;
	}
}
public class ObjectCompareDemo {
	public static void main(String[] args) {
		Score s1 = new Score ("Language", 100);
		Score s2 = new Score ("Math", 90);
		int diff = Objects.compare(s1, s2, new Comparator<Score>() {
			@Override
			public int compare (Score o1, Score o2) {
				return o1.getScore() - o2.getScore();
			}
		});
		System.out.println(diff);
	}
}
