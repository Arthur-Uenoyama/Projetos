@echo off
:: Caminho para o diretório do XAMPP
cd "C:\xampp"  (substitua com o caminho correto se necessário)

:: Inicia o XAMPP Control Panel
start xampp-control.exe

:: Espera 5 segundos para garantir que o XAMPP inicie
timeout /t 5

:: Abre o site no Google Chrome
start "" "C:\Program Files\Google\Chrome\Application\chrome.exe" http://localhost/EstoqueQuimica  (substitua "seusite" pelo seu diretório)

exit
