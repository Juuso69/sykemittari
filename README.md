# sykemittari

        ##  ##      ## ##      ##   #########     #########
        ##  ##      ## ##      ##  ###           ##       ##
        ##  ##      ## ##      ##  ##           ##         ##
###     ##  ##      ## ##      ##   ########    ##         ##
 ##     ##  ##      ## ##      ##         ###   ##         ##
 ##     ##   ##    ##   ##    ##           ##    ##       ##
  ########    ######     ######    #########      #########
 
**Asioita mitä tarvitset sykemittarin tekemiseen**
  - RaspBerry Pi4
  - Arduino UNO R3
  - Velleman VMA340 anturi
  - MariaDB tietokanta
  - Python ohjelmisto ympäristö
  - Arduino ohelmisto ympäristö: https://www.arduino.cc/en/software

**Arduino setup**
Kun olet ladannut arduino ohjlemiston, mene kohtaan "Työkalut" -> Valitse kortti "Arduino UNO" -> Valitse portti /dev/ttyACM0. Kytke anturi, niin että musta maadoitusjohto on "GND", eli ground kohdassa, kytke punainen johto 5v kohtaan ja valkoinen johto A0 kohtaan. Voit avata Serial Plotterin "Työkalut" osiosta ja sinne pitäisi tulla dataa. Kun yhdistät python koodin Arduinoon, sulje Serial Plotteri. Jos Serial Plotteri on samaan aikaan päällä, siitä saattaa tulla ongelmia, eikä koodi toimi.

