package book.java7.chapter4;

import java.io.IOException;
import java.sql.SQLException;

public class CatchingMultipleException2 {
	public static void main(String[] args) {
		try {
			access();
//		} catch (Exception e) {
		} catch (IOException | SQLException e) {
			System.out.println(e.getClass() + " : " + e.getMessage());
		}
	}

	private static void access() throws SQLException, IOException {
		if (Math.random() < 0.5) {
			throw new SQLException("Can not open the database");
		} else {
			throw new IOException("Can not open file");
		}
	}
}
