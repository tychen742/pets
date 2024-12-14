package part31_Generics_and_Wildcards;

import java.util.ArrayList;

class Machine {
	@Override
	public String toString() {
		return "I am a machine.";
	} // extends Object class automatically.

	void start() {
		System.out.println("Machine starting.");
	}
}

class Camera extends Machine {
	@Override
	public String toString() {
		return "I am a camera.";
	}

	void snap() {
		System.out.println("Taking photo");
	}

}

public class App {

	public static void main(String[] args) {
		ArrayList<String> list = new ArrayList<>();
		list.add("One");
		list.add("Two");
		// showList(list);

		ArrayList<Machine> mlist = new ArrayList<>();
		mlist.add(new Machine());
		mlist.add(new Machine());
		showList(mlist);

		ArrayList<Camera> clist = new ArrayList<Camera>();
		clist.add(new Camera());
		clist.add(new Camera());
		showList2(clist);
		// a parameterized class is not a subclass
	}

	// static void showList(ArrayList<String> list) {
	// for (String value : list) {
	// System.out.println(value);
	// }
	// }
	//
	// static void showList(ArrayList<Machine> list) {
	// for (Machine value : list) {
	// System.out.println(value);
	// }
	// }
	//
	// static void showList(ArrayList<Camera> list) {
	// for (Camera value : list) {
	// System.out.println(value);
	// }
	// }

	static void showList(ArrayList<? extends Machine> list) {
		for (Machine value : list) {
			System.out.println(value);
			((Machine) value).start();
			// ((Camera) value).snap();
		}
	}

	static void showList2(ArrayList<? super Camera> list) {
		for (Object value : list) {
			System.out.println(value);
		}
	}
	
	static void showList3(ArrayList<?> list) {
		for (Object value : list) {
			System.out.println(value);
		}
	}
}
