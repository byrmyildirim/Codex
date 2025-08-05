import java.io.InputStream;
import java.net.URL;

public class UrunServiceClient {
    public static void main(String[] args) throws Exception {
        URL wsdlURL = new URL("http://www.goatjump.com/Servis/UrunServis.svc?wsdl");
        try (InputStream in = wsdlURL.openStream()) {
            System.out.println("WSDL bytes available: " + in.available());
        }
    }
}
