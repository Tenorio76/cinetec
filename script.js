let reader;
let isReaderActive = false;

function createReader() {
    if (!isReaderActive) {
        reader = new window.SpeechSynthesisUtterance();
        reader.lang = 'es-ES';
        reader.rate = 1;
        reader.pitch = 1;
        reader.text = document.getElementById('content').innerText;
        window.speechSynthesis.speak(reader);
        isReaderActive = true;
        document.getElementById('toggleBtn').textContent = 'Apagar Lector';
    } else {
        window.speechSynthesis.cancel();
        isReaderActive = false;
        document.getElementById('toggleBtn').textContent = 'Encender Lector';
    }
}

document.getElementById('toggleBtn').addEventListener('click', createReader);