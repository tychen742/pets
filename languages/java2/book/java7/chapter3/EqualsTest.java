package book.java7.chapter3;

class Ball2 {
	String tradeMark;
	String kind;
	String color;

	Ball2(String t, String k, String c) {
		tradeMark = t;
		kind = k;
		color = c;
	}

	// overwrite equals()
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj != null && getClass() == obj.getClass()) {
			if (obj instanceof Ball2) {
				Ball2 ball = (Ball2) obj;
				if (tradeMark.equals(ball.tradeMark) && kind.equals(ball.kind) && color.equals(ball.color)) {
					return true;
				}
			}
		}
		return false;
	}
}

public class EqualsTest {

	public static void main(String[] args) {
		Ball2 b1 = new Ball2("Spalding", "Basketball", "red");
		Ball2 b2 = new Ball2("Spalding", "Basketball", "red");
		System.out.println(b1 == b2);
		System.out.println(b1.equals(b2));
	}
}
