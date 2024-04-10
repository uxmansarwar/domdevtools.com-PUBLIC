# #!/usr/bin/python
import sys
import json
from pytube import YouTube
import asyncio
from asyncio.exceptions import TimeoutError


# what results will return this script,
# any index in list below will check from YouTube object
results = [
    'watch_url',
    'title',
    'description',
    'thumbnail_url',
    'author',
    'duration',
    'views',
    'channel_id',
    'keywords'
]

# param passed while calling this script
video_url = sys.argv[1]


# response will return in this structure in (as json string)
response = {
    'result': {'streams': []},
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
    for value in results:
        # print('working')
        task = asyncio.create_task(
            load_from_api(yt, value)
        )
        MAX_TIMEOUT = 3
        try:
            response['result'][value] = await asyncio.wait_for(task, timeout=MAX_TIMEOUT)
        except TimeoutError:
            response['result'][value] = ''

asyncio.run(main())

print(json.dumps(response))


