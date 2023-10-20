import yt_dlp
import os
from colorama import Fore

while True:
    try:
        url = input('Give me Link (or type "exit" to quit): ')
        
        if url.lower() == 'exit':
            print(Fore.CYAN+ 'Bye...')
            break
        ydl_opts = {
            'outtmpl': os.path.join(os.path.expanduser("~"), "Downloads", "%(title)s.%(ext)s")
        }
        
        with yt_dlp.YoutubeDL(ydl_opts) as ydl:
            ydl.download([url])
        print(Fore.CYAN+ 'Success! Video downloaded.')
        
    except Exception as e:
        print(Fore.CYAN+ f'Error: {e}')