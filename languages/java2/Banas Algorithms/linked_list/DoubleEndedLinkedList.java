package linked_list;

// 05
public class DoubleEndedLinkedList {

	Neighbor firstLink;
	Neighbor lastLink;

	public void insertInFirstPosition(String homeOwnerName, int houseNumber) {
		Neighbor theNewLink = new Neighbor(homeOwnerName, houseNumber);
		if (isEmpty()) {
			lastLink = theNewLink;
		}
		theNewLink.next = firstLink;
		firstLink = theNewLink;
	}

	public void insertInLastPosition(String homeOwnerName, int houseNumber) {
		Neighbor theNewLink = new Neighbor(homeOwnerName, houseNumber);
		if (isEmpty()) {
			firstLink = theNewLink;
		} else {
			lastLink.next = theNewLink;
		}
		lastLink = theNewLink;

	}

	public boolean isEmpty() {
		return (firstLink == null);
	}

	/*
	 * public boolean insertAfterKey(String homeOwnerName, int houseNumber) {
	 * 
	 * }
	 */

	public static void main(String[] args) {

		DoubleEndedLinkedList theLinkedList = new DoubleEndedLinkedList();
		theLinkedList.insertInFirstPosition("Mark Evans", 7);
		theLinkedList.insertInFirstPosition("Piers Polkiss", 9);
		theLinkedList.insertInFirstPosition("Doreen Figg", 6);
		theLinkedList.insertInFirstPosition("Petunia Dursley", 4);

	}

	public void display() {
		Neighbor theLink = firstLink;
		while (theLink != null) {
			theLink.display();
			System.out.println("Next Link: " + theLink.next);
			theLink = theLink.next;
			System.out.println();
		}
	}
}

class Neighbor {
	public String homeOwnerName;
	public int houseNumber;

	public Neighbor next;
	public Neighbor previous;

	public Neighbor(String homeOwnerName, int houseNumber) {

		this.homeOwnerName = homeOwnerName;
		this.houseNumber = houseNumber;
	}

	public void display() {
		System.out.println(homeOwnerName + ": " + houseNumber + "Collegiate Loop.");
	}

	public String toString() {
		return homeOwnerName;
	}

}

class NeighborIterator {
	NeighborIterator(DoubleEndedLinkedList theNeighbors) {

	}

	// public boolean hasNext() {

	// }

}