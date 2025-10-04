package java65_Design_Pattern_OOP;

public class Animal {

	private String name;
	private int weight;
	private String sound;

	public void setName(String newName) {
		name = newName;
	}

	public String getName() {
		return name;
	}

	public void setWeight(int newWeight) {
		if (newWeight > 0) {
			weight = newWeight;
			System.out.printf("Weight is now: %s. %n", weight);
		} else {
			System.out.println("Weight must be bigger than 0.");
		}
	}

	public int getWeight() {
		return weight;
	}

	public void setSound(String newSound) {
		sound = newSound;
	}

	public String getSound() {
		return sound;
	}

}
