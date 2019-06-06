// the setup function runs once when you press reset or power the board
#include <WiFi101.h> 
#include <ArduinoHttpClient.h>

char ssid [ ] = "yourNetwork" ;       // SSID de su red
char pass [ ] = "secretPassword" ;    // contraseña de su red WPA 

WiFiClient clienteWifi;               //iniciar a biblioteca de cliente Wi-Fi
HttpClient clienteHTTP = HttpClient (clienteWifi,"http://localhost",80 ) ;


void setup() {
  // initialize digital pin LED_BUILTIN as an output.

  Serial.begin(115200);
  while (!Serial);

  Serial.println("Inicio");
  WiFi.begin(ssid,pass);

  while (WiFi.status() != WL_CONNECTED){
    Serial.println(".");
    delay (500);
  }
 
  Serial.println("Ligacao a rede estabelecida");
  Serial.print("IP");
  Serial.println((IPAddress)WiFi.localIP());
  Serial.print("NETMASK: ");
  Serial.println((IPAddress)WiFi.subnetMask());
  Serial.print("GATEWAY: ");
  Serial.println((IPAddress)WiFi.gatewayIP());
 
}

// the loop function runs over and over again forever
void loop() {

// pedido get
    /*
    clienteHTTP.get("/FichaPractica6/api.php");
    if (clienteHTTP.responseStatusCode() == 200 ){
      Serial.println(clienteHTTP.responseStatusCode());
    }else{
      Serial.println("ERROR !!");
    }
  
    delay(5000);
    */
//

// pedido post

    String contentType = "application/xwww-form-urlencoded";
    String postData = "valor=42&nome=temperatura&hora=29/03/2019 00:31";
    
    clienteHTTP.post("/FichaPractica6/api.php", contentType, postData); 
    if (clienteHTTP.responseStatusCode() == 200 ){
      Serial.println(clienteHTTP.responseStatusCode());
    }else{
      Serial.println("ERROR !!");
    }
  
    delay(5000);

//
}
