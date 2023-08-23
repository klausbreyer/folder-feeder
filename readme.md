# Simple Podcast Feed Generator

## Introduction

This project allows you to easily convert audio files in a directory on your web server into a podcast feed. It's perfect for those who have audio files (like audiobooks or downloaded YouTube content) and wish to listen to them in their podcast player.

## Requirements

- A standard web hosting space with PHP support.
- Ability to upload files to this hosting space.
- Audio files you want to be included in the podcast feed.

## Setup and Usage

### 1. Prepare Your Webspace

Ensure that your webspace supports PHP. Most shared hosting services and web servers with a LAMP (Linux, Apache, MySQL, PHP) or similar stack should work.

### 2. Upload the Script

- Download the `index.php` file from this project.
- Upload `index.php` to the directory on your web server where your audio files are located.

### 3. Organize Your Audio Files

- Place all the audio files you want to be available in the podcast feed into the same directory as `index.php`.
- Supported formats include: MP3, M4A, MP4, and WAV. You can easily modify the script to support additional formats if needed.

### 4. Access Your Podcast Feed

- Navigate to the directory containing `index.php` using a web browser. For example, if you uploaded the file to `https://yourwebsite.com/audio/`, you would simply go to `https://yourwebsite.com/audio/`.
- This URL is your podcast feed. Copy it.

### 5. Add the Feed to Your Podcast Player

- Open your podcast player.
- Look for an option to add or subscribe to a new podcast by URL or RSS feed.
- Paste the podcast feed URL you copied in the previous step.
- Your audio files should now appear as episodes in your podcast player.

## Note

This is a basic script meant for personal use. It doesn't offer advanced features like sorting, metadata editing, or episode descriptions beyond the filename. If you need more advanced features, you might need to modify the script or look for a more comprehensive solution.
