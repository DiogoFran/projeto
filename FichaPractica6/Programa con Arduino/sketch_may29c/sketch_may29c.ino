//biblioteca para MKR1000
#include <WiFi101.h>
//biblioteca para MKR1000
#include <ArduinoHttpClient.h> 
//iniciar a biblioteca de cliente Wi-Fi
WiFiClient clienteWifi; 
HttpClient clienteHTTP = HttpClient ( clienteWifi,
"www.iot.dei.estg.ipleiria.pt", 80 ) ; 

//SSID of your network
char ssid[] = "labs";
//password of your WPA Network
char pass[] = "robot1cA!ESTG";



// the setup function runs once when you press reset or power the board
void setup() {

  Serial.begin(115200);
  while (!Serial);
  Serial.println ("Inicio");
  WiFi.begin(ssid, pass);

  while ( WiFi.status() != WL_CONNECTED) {
    Serial.println(".");
    delay(500);
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
//pedido get 
//clienteHTTP.get("/ti/eid-pl02-g07/api.php?nome=temperatura");

//if(clienteHTTP.responseStatusCode() == 200){
//  String numero=clienteHTTP.responseBody();
//  if(numero.toFloat()>20){
//  Serial.println("Esta calor");
////  luz a piscar
//  }
//
//  delay(2000);
//}
//else{
//  Serial.print("Ocorreu erro");
//  Serial.println(clienteHTTP.responseStatusCode());
//  delay(2000);
//  }
//pedido post
String contentType = "application/x-www-form-urlencoded";
String postData = "valor=42&nome=temperatura&hora=29/03/2019 00:31 ";

clienteHTTP.post("/ti/eid-pl02-g07/api.php", contentType, postData );
if (clienteHTTP.responseStatusCode() == 200 ){
 Serial.println(clienteHTTP.responseBody());
}else{
  Serial.print ("Ocurro Error ");
  Serial.println(clienteHTTP.responseStatusCode());
}
 

}
