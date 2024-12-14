// Polymorphism: the use of Child class where you can use parent class

package polyPurcell;

public class App {

	public static void main(String[] args) {

		Plant plant1 = new Plant();
		Tree tree = new Tree();

		// Plant plant2 = plant1; //
		Plant plant2 = tree; // would work because plant is the parent of tree

		plant2.grow(); // will grow tree because the object is tree

		tree.shedLeaves();
		// plant2.shedLeaves();

		// Plant plant3; // a null reference
		// plant3.grow(); // the type of variable decides what you can call

		doGrow(tree);
		doGrow(plant2);
		doGrow(plant1);

	}

	public static void doGrow(Plant plant) {
		plant.grow();
	}

}
