import java.util.Arrays;
// import org.apache.commons.lang3.ArrayUtils;

// rename and save to get rid of the error sign
// Classes: for creating objects
// getter & setter
// Constructor
public class MonsterTwo {

	static char[][] battleBoard = new char[10][10];

	public static void buildBattleBoard() {
		// Enhanced for loop
		for (char[] row : battleBoard)
			// row: place holder
			Arrays.fill(row, '*'); // Arrays.fill

	}

	public static void redrawBoard() {
		int k = 1;
		while (k <= 30) {
			System.out.print('-');
			k++;
		}
		System.out.println();

		for (int i = 0; i < battleBoard.length; i++) {
			for (int j = 0; j < battleBoard[i].length; j++) {
				System.out.print("|" + battleBoard[i][j] + "|");
			}
			System.out.println();
		}
		k = 1;
		while (k <= 30) {
			System.out.print('-');
			k++;
		}
		System.out.println();
	}

	// final: define a Constant
	public final String TOMBSTONE = "Here lies a dead monster";

	// class variables = fields
	private int health = 500;
	private int attack = 20;
	private int movement = 2;

	private boolean alive = true;

	public String name = "Big Monster";
	public char nameChar1 = 'B';
	public int xPosition = 0;
	public int yPosition = 0;
	public static int numOfMonsters; // field/variable

	/*
	 * Accessor Method: to access the private variables
	 */
	public int gethealth() {
		return health;
	}

	public int getAttack() {
		return attack;
	}

	public int getMovement() {
		return movement;
	}

	public int getxPosition() {
		return xPosition;
	}

	public int getyPosition() {
		return yPosition;
	}

	public boolean getAlive() {
		return alive;
	}

	public void sethealth(int decreaseHealth) { // public, to set the health for
												// a monster
		health = health - decreaseHealth;
		if (health <= 0) {
			alive = false;
		}
	}

	// Overloaded Method: same method name, different attributes
	public void setHealth(double decreaseHealth) {
		int intDecreaseHealth = (int) decreaseHealth;
		health = health - intDecreaseHealth;
		if (health <= 0) {
			alive = false;
		}
	}

	public void moveMonster(MonsterTwo[] monster, int arrayItemIndex) {
		boolean isSpaceOpen = true;
		int maxXboardSpace = battleBoard.length - 1;
		int maxYBoardSpace = battleBoard[0].length - 1;

		while (isSpaceOpen) {
			int randMoveDirection = (int) (Math.random() * 4);
			int randMoveDistance = (int) (Math.random() * (this.getMovement() + 1));
			System.out.println(randMoveDistance + " " + randMoveDirection);
			battleBoard[this.yPosition][this.xPosition] = '*';

			if (randMoveDirection == 0) {
				if ((this.yPosition - randMoveDistance) < 0) {
					this.yPosition = 0;
				} else {
					this.yPosition = this.yPosition - randMoveDistance;
				}
			} else if (randMoveDirection == 1) {
				if ((this.xPosition - randMoveDistance) > maxXboardSpace) {
					this.xPosition = maxXboardSpace;
				} else {
					this.xPosition = this.xPosition - randMoveDistance;
				}
			} else if ((randMoveDirection == 2)) {
				if ((this.yPosition + randMoveDistance) > maxYBoardSpace) {
					this.yPosition = maxYBoardSpace;
				} else {
					this.yPosition = yPosition + randMoveDistance;
				}
			} else {
				if ((this.xPosition - randMoveDistance) < 0) {
					this.xPosition = 0;
				} else {
					this.xPosition = this.xPosition - randMoveDistance;
				}
			}

			for (int i = 0; i < monster.length; i++) {
				// Monster Frank
				if (i == arrayItemIndex) {
					continue;
				}
				if (onMySpace(monster, i, arrayItemIndex)) {
					isSpaceOpen = true;
					break;
				} else {
					isSpaceOpen = false;
				}
			}

		} // end of while loop
		battleBoard[this.yPosition][this.xPosition] = this.nameChar1;
	} // end of MoveMonster

	public boolean onMySpace(MonsterTwo[] monster, int indexToChk1,
			int indexToChk2) {
		if ((monster[indexToChk1].xPosition) == (monster[indexToChk2].xPosition)
				&& (monster[indexToChk1].yPosition) == (monster[indexToChk2].yPosition)) {
			return true;
		} else {
			return false;
		}
	} // end of onMySpace

	// Constructor: The first object created based on the class blueprint
	// Executed once only per object.
	// Can not return Void, no return
	public MonsterTwo(int health, int attack, int movement, String name) {
		this.health = health; // this keyword for constructor
		this.attack = attack; // this = current object = class field
		this.movement = movement;
		this.name = name;

		int maxXboardSpace = battleBoard.length - 1;
		int maxYboardSpace = battleBoard[0].length - 1; // ///////////////////////

		int randNumX, randNumY;

		do {
			randNumX = (int) (Math.random() * maxXboardSpace);
			randNumY = (int) (Math.random() * maxYboardSpace);
		} while (battleBoard[randNumX][randNumY] != '*');

		this.xPosition = randNumX;
		this.yPosition = randNumY;

		this.nameChar1 = this.name.charAt(0);

		battleBoard[this.yPosition][this.xPosition] = this.nameChar1;
		numOfMonsters++;
	}

	public MonsterTwo(int newHealth) {
		health = newHealth;
	}

	public MonsterTwo(int newHealth, int newAttack) {
		this(newHealth);
		attack = newAttack;
	}

	public static void main(String[] args) {
		// MonsterTwo Frank = new MonsterTwo();
		// System.out.println(Frank.attack); // can print a private field
		// because inside of class

		// redrawBoard();
		// buildBattleBaord();
	}

}
