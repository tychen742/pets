package book.java7.chapter3;
import java.io.*;
class Father2 {
    void amethod() throws Exception{}
    { System.out.println("amethod of Father2");};
}
public class Son2 extends Father2 {
    public static void main(String[] args) {
        Son2 s = new Son2();
        try {
            s.amethod();
        }
        catch(IOException e){}	
    }
//    @Override
    void amethod() throws IOException{}; // 也可以不丟出例外事件
}


