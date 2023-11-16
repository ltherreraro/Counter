**INSTALL
Esto es un mini tutoria para la instalacion de drivers para Sierra Wireless al ejecutar ls /dev/tty no aparece dev/ttyUSB0 etc entonces se debe descargar el archivo comprimido de esta carpeta
1. Descomprimir los archivos
2. Instalar
	sudo apt-get install build-essential make gcc
	sudo apt-get install linus-headers-'uname -r'
3. Una vez se descomprimen los archivo abrir la carpeta GobiSerial
	cd GobiSerial
	make
	sudo make install
4. Luego abrir la carpeta GobiNet
	cd GobiNet
	make	
	sudo make install
5. Probar con:
	sudo modprobe GobiSerial [debug=Y]
	sudo modprobe GobiNet [debug=Y]	
