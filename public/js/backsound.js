const playButton = document.getElementById('open-envelope');
const muteButton = document.getElementById('muteButton');
const audioPlayer = document.getElementById('audioPlayer');
const mute = document.getElementById('mute');
const unmute = document.getElementById('unmute');

// Event listener untuk tombol Play/Pause
playButton.addEventListener('click', function () {
    if (audioPlayer.paused) {
        audioPlayer.play(); // Memulai pemutaran
        playButton.textContent = 'Pause MP3'; // Ubah teks tombol menjadi "Pause"
    } else {
        audioPlayer.pause(); // Pause jika sedang diputar
        playButton.textContent = 'Play MP3'; // Ubah teks tombol menjadi "Play"
    }
});

// Event listener untuk tombol Mute/Unmute
muteButton.addEventListener('click', function () {
    if (audioPlayer.muted) {
        audioPlayer.muted = false; // Unmute
        mute.classList.add('hidden')
        unmute.classList.remove('hidden')
    } else {
        audioPlayer.muted = true; // Mute
        mute.classList.remove('hidden')
        unmute.classList.add('hidden')
    }
});
