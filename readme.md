# Folder Feeder: Personal Adhoc Podcast Hosting

## Introduction

In today's digital landscape, YouTube is a treasure trove of engaging content, including many podcasts that unfortunately remain confined within a video format. This presents a challenge for those with limited screen time or a preference for audio-only media. To address this, I've developed a simple PHP script that can transform any collection of audio files into a podcast feed. This tool is especially useful for converting YouTube videos into podcast episodes, allowing you to enjoy them on-the-go, just like any other podcast in your personal playlist.

## Features

- Converts a directory of audio files into a podcast feed.
- Easy to set up on any web hosting service with PHP support.
- Supports various audio formats, including MP3, M4A, MP4, and WAV.

## Requirements

- Web hosting with PHP support.
- FTP or similar access to upload files.
- Audio files (e.g., extracted from YouTube videos) to include in your podcast feed.

## How to Use

### Step 1: Prepare Your Audio Files

1. **Download Content**: Use tools like `yt-dlp` to download audio from YouTube. Example: `yt-dlp https://www.youtube.com/watch?v=U9mJuUkhUzk`
2. **Convert to Audio**: Use `ffmpeg` to convert video files to audio. Example: `ffmpeg -i input.mp4 -q:a 0 -map a output.mp3`
3. **Upload Files**: Use FTP to upload the audio files to your web server.

### Step 2: Set Up the Script

1. **Download**: Get the `index.php` script from this repository.
2. **Upload**: Place `index.php` in the same directory as your audio files on the web server.

### Step 3: Create Your Podcast Feed

1. **Access**: Visit the directory URL where `index.php` is located (e.g., `https://yourwebsite.com/audio/`).
2. **Copy URL**: This URL is your new podcast feed.

### Step 4: Enjoy Your Podcast

1. **Add to Player**: Open your podcast player and add a new podcast by URL.
2. **Paste Feed URL**: Use the URL obtained from the previous step.
3. **Listen**: Your audio files will appear as individual podcast episodes.

## Additional Notes

This script is designed for simplicity and personal use. It does not include advanced features like file sorting, metadata editing, or detailed episode descriptions. If you require these capabilities, consider enhancing the script or exploring other solutions.

## Copyright Reminder

Before using this tool, please ensure that you have the right to repurpose and distribute the content you are converting into a podcast format. Copyright laws vary by region and type of content, and it's essential to respect the intellectual property rights of creators. Unauthorized use or distribution of copyrighted material could result in legal consequences.
