import org.junit.Test;
import static org.junit.Assert.assertEquals;

/**
 * Created by arojomarijuan on 10/19/2015.
 */
public class OcpTest {


    @Test
    public void testTheNumber() {
        Ocp ocp = new Ocp();
        assertEquals("1",ocp.say(1));
    }

    @Test
    public void itSaysFizzWhenMultipleofThree() {
        Ocp ocp = new Ocp();
        assertEquals("Fizz",ocp.say(3));
    }

    @Test
    public void itSaysBuzzWhenMultipleofFive() {
        Ocp ocp = new Ocp();
        assertEquals("Buzz",ocp.say(5));
    }

    @Test
    public void itSaysFizzBuzzWhenMultipleofThreeAndFive() {
        Ocp ocp = new Ocp();
        assertEquals("FizzBuzz",ocp.say(15));
    }

    @Test
    public void itSaysBangWhenMultipleofSeven() {
        Ocp ocp = new Ocp();
        assertEquals("Bang",ocp.say(7));
    }

    @Test
    public void itSaysFizzBangWhenMultipleofThreeAndSeven() {
        Ocp ocp = new Ocp();
        assertEquals("FizzBang",ocp.say(21));
    }

    @Test
    public void itSaysBuzzBangWhenMultipleofFiveAndSeven() {
        Ocp ocp = new Ocp();
        assertEquals("BuzzBang",ocp.say(35));
    }

    @Test
    public void itSaysFizzBuzzBangWhenMultipleofThreeAndFiveAndSeven() {
        Ocp ocp = new Ocp();
        assertEquals("FizzBuzzBang",ocp.say(105));
    }
}
