import java.util.Arrays;
// import org.apache.commons.lang3.*;

public class Java10_Monster {

	public static void main(String[] args) {
		MonsterTwo.buildBattleBoard();

		char[][] tempBattleBoard = new char[10][10];

		// ObjectName[] ArrayName = new ObjectName[4];

		MonsterTwo[] Monsters = new MonsterTwo[4];

		Monsters[0] = new MonsterTwo(1000, 20, 1, "Frank");
		Monsters[1] = new MonsterTwo(500, 40, 1, "Drac");
		Monsters[2] = new MonsterTwo(1000, 20, 1, "Paul");
		Monsters[3] = new MonsterTwo(1000, 20, 1, "George");

		MonsterTwo.redrawBoard();

		for (MonsterTwo m : Monsters) { // Enhanced for statement
			if (m.getAlive()) {
				// Monsters: Array name; m: current position
//				int arrayItemIndex = ArrayUtils.indexOf(Monsters, m);

//				m.moveMonster(Monsters, arrayItemIndex);
			}
		}

		MonsterTwo.redrawBoard();

	}
}
