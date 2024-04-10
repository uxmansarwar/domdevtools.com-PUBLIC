# #!/usr/bin/python
import sys
import json
from pytube import YouTube
import asyncio
from asyncio.exceptions import TimeoutError


# what results will return this script,
# any index in list below will check from YouTube object
results = [
    'url',
    'itag',
    'vcodec',
    'resolution',
    'codec',
    'fps',
    'mime_type',
    'filesize_mb'
]


# param passed while calling this script
video_url = sys.argv[1]


# response will return in this structure in (as json string)
response = {
    'result': {'streams': {'mp4': [], 'mp3': []}},
    'errors': []
}


# api caller
async def load_from_api(yt, value):
    try:
        return getattr(yt, value)
    except Exception as e:
        return ''


async def main():
    yt = YouTube(video_url)
    streams = yt.streams
    mp4_streams = streams.filter(file_extension='mp4',only_video=True)
    i = 0
    for str in mp4_streams:
        stream_data = {}
        for value in results:
            task = asyncio.create_task(
                load_from_api(str, value)
            )
            MAX_TIMEOUT = 6
            try:
                stream_data[value] = await asyncio.wait_for(task, timeout=MAX_TIMEOUT)
            except TimeoutError:
                stream_data[value] = ''


        response['result']['streams']['mp4'].append(stream_data)
        i = i + 1

    mp3_streams = streams.filter(only_audio=True)
    i = 0
    for str in mp3_streams:
        stream_data = {}
        for value in results:
            task = asyncio.create_task(
                load_from_api(str, value)
            )
            MAX_TIMEOUT = 6
            try:
                stream_data[value] = await asyncio.wait_for(task, timeout=MAX_TIMEOUT)
            except TimeoutError:
                stream_data[value] = ''


        response['result']['streams']['mp3'].append(stream_data)
        i = i + 1

asyncio.run(main())

print(json.dumps(response))


