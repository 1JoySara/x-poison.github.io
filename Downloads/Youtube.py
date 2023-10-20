import yt_dlp
import os

if not os.path.exists('Downloads'):
    os.makedirs('Downloads')

while True:
    try:
        url = input('Give me Link (or type "exit" to quit): ')
        
        if url.lower() == 'exit':
            print('Exiting program...')
            break
        
        ydl_opts = {
            'outtmpl': 'Downloads/%(title)s.%(ext)s' 
        }
        
        with yt_dlp.YoutubeDL(ydl_opts) as ydl:
            ydl.download([url])
        print('Success! Video downloaded.')
        
    except Exception as e:
        print(f'Error: {e}')