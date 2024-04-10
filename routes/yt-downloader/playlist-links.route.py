#!/usr/bin/python
import json
# import requests
from pytube import Playlist
# from bs4 import BeautifulSoup
import sys


# get passed param
playlist_url = sys.argv[1]

# response dictionary
response = {
    'result': {
        'urls': [],
        'title': '',
        'description': ''
    },
    'errors': []
}


try:
    # Create a Playlist object
    playlist = Playlist(playlist_url)
    response['result']['title'] = playlist.title
    for url in playlist.video_urls:
        response['result']['urls'].append(url)

except Exception as e:
    response['errors'].append(e)
    
print(json.dumps(response))

