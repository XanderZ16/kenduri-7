<div class="fixed top-0 left-0 z-50 flex flex-col items-center justify-center w-screen h-screen bg-primary" id="envelope">
    <img src="/images/bg/bg-1.png" alt="bg" class="absolute w-screen h-screen -z-10">
    <img src="/images/envelope.svg" alt="Envelope" class="-mt-8">
    <div class="absolute top-0 sm:-top-24 left-0 w-screen *:w-full sm:*:w-1/2 flex">
        <img src="/images/garnish-1.svg" alt="garnish">
        <img src="/images/garnish-1.svg" alt="garnish" class="hidden sm:block">
    </div>
    <div class="flex flex-col items-center -mt-6">
        <h2 class="mb-4 text-xl font-semibold text-center text-white font-montserrat">Kepada YTH :</h2>
        <h2 class="mb-6 text-xl text-center text-white uppercase font-montserrat">
            {{ $guest ?? "Bapak/Ibu Ditempat" }}
        </h2>
        <button class="px-4 py-2 text-xl font-semibold text-white bg-secondary hover:opacity-90 rounded-xl font-montserrat" id="open-envelope">Buka Undangan</button>
    </div>
</div>

<script>
    document.getElementById('open-envelope').addEventListener('click', () => {
        document.getElementById('envelope').classList.add('!hidden');
    })
</script>
