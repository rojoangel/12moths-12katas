import com.sun.javaws.exceptions.InvalidArgumentException;

/**
 * Created by arojomarijuan on 10/19/2015.
 */
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