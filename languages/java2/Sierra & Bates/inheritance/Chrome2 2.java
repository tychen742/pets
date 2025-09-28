package inheritance;


class Chrome2 {
	public static void main(String[] args) {
		X z = new Z();
		X y = new Y();
		Z y2 = (Z) y;
		z.go();
		y.go();
		y2.go();

	}
}