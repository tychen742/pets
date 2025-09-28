package book.java7.chapter3;

import java.util.*;

// import org.apache.commons.lang3.builder.HashCodeBuilder;

import static java.lang.System.*;

public class HashCodeTest {

	public static void main(String[] args) {
		Ball b1 = new Ball("Spalding", "Basketball", "Red");
		Ball b2 = new Ball("Spalding", "Basketball", "Red");
		System.out.println("b1.equals(b2) = " + b1.equals(b2));
		System.out.println("b1.hashCode() = " + b1.hashCode());
		System.out.println("b2.hashCode() = " + b2.hashCode());
		HashMap h = new HashMap();
		h.put(new Ball("Spalding", "Basketball", "Red"), "ABC");
		System.out.print("HasMap content = ");
		System.out.println(h.get(new Ball ("Spalding", "Basketball", "Red")));
	}
}

class Ball {
	String tradeMark;
	String kind;
	String color;

	Ball(String t, String k, String c) {
		tradeMark = t;
		kind = k;
		color = c;
	}

	// overwrite equals()
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj != null && getClass() == obj.getClass()) {
			if (obj instanceof Ball) {
				Ball ball = (Ball) obj;
				if (tradeMark.equals(ball.tradeMark) && kind.equals(ball.kind) && color.equals(ball.color)) {
					return true;
				}
			}
		}
		return false;
	}
	public int hashCode() {
//		return new HashCodeBuilder(17, 37).
//				append(tradeMark).
//				append(kind).
//				append(color).
//				toHashCode();
		return 0;
	}
}
