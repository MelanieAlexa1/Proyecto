import pyautogui
from time import sleep

# Código para enviar mensaje en WhatsApp
webbrowser.open('https://web.whatsapp.com/send?phone=+52 1 5')
sleep(10)
for i in range (1):
    pyautogui.typewrite('Mensaje desde la aplicación de registro')
    pyautogui.press('enter')
