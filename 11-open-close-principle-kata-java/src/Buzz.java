/**
 * Created by arojomarijuan on 10/19/2015.
 */
public class Buzz implements FizzNum {

    public String say(int number) {
        if (number % 5 == 0) {
            return "Buzz";
        }
        else {
            return "";
        }
    }
}
