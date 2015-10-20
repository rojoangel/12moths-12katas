import com.sun.javaws.exceptions.InvalidArgumentException;

public class Fizz implements FizzNum {

    public String say(int number) {
        if (number % 3 == 0) {
            return "Fizz";
        }
        else {
            return "";
        }
    }
}