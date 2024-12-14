package ch06_API;
import java.util.ArrayList;

public class DotCom {

	private ArrayList<String> locationCells;
	// pirvate int numOfHits;
	//don't need that now
	private String name;
	
	public void setLocationCells(ArrayList<String> loc) {
		locationCells = loc;
	}
	
	public void setName (String n) {
		name = n; 
	}
	
	public String checkYourself(String userInput) {
		String result = "miss";
		int index = locationCells.indexOf(userInput);
		if (index >= 0) {
			locationCells.remove(index);
			if (locationCells.isEmpty()) {
				result = "kill";
			}
			else {
				result = "hit";
			} // close if
		} // close outer if
		
	return result;
	} // close method 
} // close class
