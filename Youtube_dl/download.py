import cgi
import yt_dlp

form = cgi.FieldStorage()

if "videoUrl" in form:
    video_url = form["videoUrl"].value
    ydl_opts = {}
    
    with yt_dlp.YoutubeDL(ydl_opts) as ydl:
        ydl.download([video_url])
        
    print("Downloaded successfully.")
else:
    print("Invalid video URL.")
