# Sistema de registre d'usuari amb verificació per correu electrònic

Aquest projecte permet el registre d'usuaris amb verificació de correu electrònic mitjançant **PHPMailer**. Inclou la gestió de sessions per desar l'estat dels usuaris i la seva verificació. A continuació es descriu el procés d'execució del sistema.

## Característiques principals

1. **Registre d'usuari:** L'usuari pot registrar-se mitjançant un formulari (pendents les validacions dels camps).
2. **Desament de la informació:** Quan l'usuari fa clic a "Desa":
   - La informació es desa a `$_SESSION['user_registered']`.
   - També es desa al model d'usuaris a `$_SESSION['users']`.
3. **Enviament de correu de verificació:** Utilitzant **PHPMailer**, s'envia un correu electrònic amb l'enllaç de verificació a l'adreça proporcionada per l'usuari.
4. **Verificació d'usuari:**
   - Des del correu de verificació, es crida al mètode `verify` per processar la verificació.
   - El mètode `verify` rep els paràmetres necessaris a través de la variable `$values`.
   - Es fan les comprovacions pertinents, s'actualitza el model per marcar l'usuari com a verificat i s'elimina la variable `$_SESSION['user_registered']`.
5. **Vista de verificació:** Després de verificar l'usuari, es carrega una vista amb la informació de l'usuari verificat per dirigir-lo a la vista de Login.
6. **Login d'usuari:** A la vista de Login es comproven les credencials de l'usuari i si està verificat. Si tot és correcte, es desa la variable `$_SESSION['user_logged']` per indicar que l'usuari ha iniciat sessió correctament.
