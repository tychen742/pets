public class Java07_Class_Access {

	public static void main(String[] args) {
		Java07_Class_Monster Frank = new Java07_Class_Monster();
		Frank.name = "Frank";
		System.out.println(Frank.name);

		// System.out.println(Frank.attack);
		// can't access private field
		// can access through accessor methods/funcitons
		System.out.println(Frank.name + " has an attack of "
				+ Frank.getAttack());
	}
}
