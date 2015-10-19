/**
 * Created by arojomarijuan on 10/19/2015.
 */
public class Bang implements FizzNum {

    public String say(int number) {
        if (number % 7 == 0) {
            return "Bang";
        }
        else {
            return "";
        }
    }
}
