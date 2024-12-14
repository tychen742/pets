package java11_ArrayList;

import java.util.ArrayList;

public class Print {

	static void print(ArrayList al) {
		System.out.println();
		for (int i = 0; i < al.size(); i++)
			System.out.print(i + " " + al.get(i) + " ");
	}
}